document.addEventListener("DOMContentLoaded", function () {

    // list deletefiles
    $.get('/custom_apps/myappcustom/templates/deletefiles.html', function (data) {
        const deletefilesContainer = document.querySelector('.app-navigation.files-navigation');
        if (deletefilesContainer) {
            const deleteList = deletefilesContainer.querySelector('.app-navigation-entry__settings');
            if (deleteList) {
                deleteList.insertAdjacentHTML('beforeend', data);
            }
        }
    });

    // navigation
    $.get(
        "/custom_apps/myappcustom/templates/ui_navigation.html",
        function (data) {
            const filesNavigationContainer = document.querySelector('.app-navigation.files-navigation');
            if (filesNavigationContainer) {
                const navigationList = filesNavigationContainer.querySelector('.app-navigation__body.app-navigation__body--no-list');
                if (navigationList) {
                    navigationList.innerHTML = data;

                    const viewsTrigger = document.getElementById('views-trigger');
                    const viewsSubmenu = document.getElementById('views-submenu');
                    const menuItems = document.querySelectorAll('.menu-item');
                    const submenuItems = document.querySelectorAll('.submenu-item');

                    if (viewsTrigger) {
                        viewsTrigger.addEventListener('click', function (event) {
                            viewsSubmenu.classList.toggle('open');
                        });
                    } else {
                        console.warn('viewsTrigger element not found!');
                    }

                    menuItems.forEach(item => {
                        const link = item.querySelector('a');
                        if (link) {
                            link.addEventListener('click', function (event) {
                                event.preventDefault();
                                menuItems.forEach(otherItem => {
                                    otherItem.classList.remove('active');
                                });
                                item.classList.add('active');
                                window.location.href = link.href;
                            });
                        }
                    });

                    // Activate submenu items
                    submenuItems.forEach(item => {
                        item.addEventListener('click', function () {
                            submenuItems.forEach(otherItem => {
                                otherItem.classList.remove('active');
                                otherItem.innerHTML = otherItem.innerHTML.replace(' <span class="checkmark">✓</span>', '');
                            });

                            this.classList.add('active');
                            this.innerHTML += ' <span class="checkmark">✓</span>';

                        });
                    });

                    const appContent = document.getElementById('app-content-vue');
                    if (appContent) {
                        const servicesItem = document.querySelector('[data-menu="services"]');
                        const faqsItem = document.querySelector('[data-menu="faqs"]');
                        const contactUsItem = document.querySelector('[data-menu="contact-us"]');

                        const loadAndActivate = (item, url) => {
                            item.addEventListener('click', function (event) {
                                event.preventDefault();
                                loadContent(url, appContent);

                                menuItems.forEach(otherItem => {
                                    otherItem.classList.remove('active');
                                });
                                item.classList.add('active');
                            });
                        };

                        if (servicesItem) {
                            loadAndActivate(servicesItem, '/custom_apps/myappcustom/templates/services.html');
                        }

                        if (faqsItem) {
                            loadAndActivate(faqsItem, '/custom_apps/myappcustom/templates/faq.html');
                        }

                        if (contactUsItem) {
                            loadAndActivate(contactUsItem, '/custom_apps/myappcustom/templates/contact.html');
                        }

                    }

                    const currentUrl = window.location.pathname + window.location.search;
                    menuItems.forEach(item => {
                        const link = item.querySelector('a');
                        if (link) {
                            const linkHref = link.getAttribute('href');
                            if (currentUrl === linkHref) {
                                item.classList.add('active');
                            }
                        }
                    });
                } 
            }
        }
    );

    // --- Function to load content ---
    function loadContent(url, targetElement) {
        $.get(url, function (data) {
            targetElement.innerHTML = data;
        }).fail(function () {
            targetElement.innerHTML = '<p>Error loading content.</p>';
        });
    }

    function waitForElement(selector, callback) {
        let element = document.querySelector(selector);
        if (element) {
            callback(element);
        } else {
            setTimeout(() => waitForElement(selector, callback), 50);
        }
    }

    waitForElement('#content-vue.app-files main#app-content-vue', function (mainElement) {
        const sectionElement = document.createElement('section');
        sectionElement.id = 'main-content';

        function handleNavigationClick(event) {
            if (event.target.closest('.app-navigation-entry-link')) {
                event.preventDefault();

                const href = event.target.closest('.app-navigation-entry-link').getAttribute('href');

                window.location.href = href;
            }
        }

        let observer = new MutationObserver(mutations => {
            function processMutations() {
                if (mainElement.querySelector('#app-content-vue .files-list') || mainElement.querySelector('#app-content-vue .empty-content')) {
                    observer.disconnect();

                    let children = Array.from(mainElement.children);
                    sectionElement.append(...children);
                    mainElement.appendChild(sectionElement);

                    fetch("/custom_apps/myappcustom/templates/custom_interface.php")
                        .then(response => response.text())
                        .then(data => {
                            const contentVue = document.querySelector("#content-vue.content.app-files");
                            if (contentVue) {
                                $("#app-content-vue").append(data);
                                let checkInterval = setInterval(() => {
                                    let targetContainer = document.querySelector('#content-vue-custom .wapper-box');
                                    if (targetContainer) {
                                        clearInterval(checkInterval);

                                        const navigationList = document.querySelector('.app-navigation-list.files-navigation__list');
                                        if (navigationList) {
                                            navigationList.addEventListener('click', handleNavigationClick);
                                        }
                                        targetContainer.appendChild(sectionElement);
                                    }
                                }, 100);

                                $("#app-content-vue")
                                    .promise()
                                    .done(function () {
                                        // chart
                                        fetch("/custom_apps/myappcustom/templates/get_storage.php")
                                            .then(response => response.json())
                                            .then(data_storage => {

                                                const location = data_storage.location.country_name;

                                                const totalStorage = data_storage.storage.total;
                                                const usedStorage = data_storage.storage.used;
                                                const freeStorage = data_storage.storage.free;

                                                const totalCapacity = data_storage.network.net_total;
                                                const netOutUsed = data_storage.network.net_out;
                                                const netInUsed = data_storage.network.net_in;

                                                const totalAverageEgress = data_storage.network_average.egress;
                                                const totalAverageIngress = data_storage.network_average.ingress;
                                                const egress = data_storage.network_average.avg_egress;
                                                const ingress = data_storage.network_average.avg_ingress;

                                                const total = data_storage.network_total.total;
                                                const charttotal = data_storage.network_total.total_size;

                                                document.querySelector("#header-content .storage .value").textContent = totalStorage + " GB";
                                                document.querySelector("#header-content .location .value").textContent = location;
                                                document.querySelector("#digital-storage .value-chart .disk-used").textContent = usedStorage + " GB";
                                                document.querySelector("#digital-storage .value-chart .disk-free").textContent = freeStorage + " GB";

                                                document.querySelector("#digital-storage .net-out .chart-text-used").textContent = netOutUsed + " MB";
                                                document.querySelector("#digital-storage .net-in .chart-text-used").textContent = netInUsed + " MB";

                                                document.querySelector("#digital-storage .egress .chart-text-used").textContent = egress + " Mb/s";
                                                document.querySelector("#digital-storage .ingress .chart-text-used").textContent = ingress + " Mb/s";

                                                document.querySelector("#digital-storage .total-digital .chart-text-used").textContent = charttotal + " GB";

                                                const netOutCtx = document
                                                    .getElementById("barChart")
                                                    .getContext("2d");
                                                const netInCtx = document
                                                    .getElementById("netInChart")
                                                    .getContext("2d");
                                                const storageTotalCtx = document
                                                    .getElementById("storageChart")
                                                    .getContext("2d");
                                                const egressCtx = document
                                                    .getElementById("egressChart")
                                                    .getContext("2d");
                                                const ingressCtx = document
                                                    .getElementById("ingressChart")
                                                    .getContext("2d");
                                                const totalCtx = document
                                                    .getElementById("totalChart")
                                                    .getContext("2d");

                                                const createBarChart = (ctx, dataValue, totalValue) => {
                                                    return new Chart(ctx, {
                                                        type: "bar",
                                                        data: {
                                                            labels: [""],
                                                            datasets: [
                                                                {
                                                                    data: [dataValue],
                                                                    backgroundColor: ["#2C78C8"],
                                                                    borderRadius: {
                                                                        bottomLeft: 6,
                                                                        bottomRight: 6,
                                                                        topLeft: 0,
                                                                        topRight: 0,
                                                                    },
                                                                    barThickness: "flex",
                                                                    categoryPercentage: 1.0,
                                                                    barPercentage: 1.0,
                                                                    borderSkipped: false,
                                                                },
                                                            ],
                                                        },
                                                        options: {
                                                            responsive: true,
                                                            maintainAspectRatio: false,
                                                            scales: {
                                                                y: {
                                                                    beginAtZero: true,
                                                                    max: totalValue,
                                                                    display: false,
                                                                },
                                                                x: {
                                                                    display: false,
                                                                },
                                                            },
                                                            plugins: {
                                                                legend: {
                                                                    display: false,
                                                                },
                                                                tooltip: {
                                                                    enabled: false,
                                                                },
                                                            },
                                                        },
                                                    });
                                                };

                                                const centerTextPlugin = {
                                                    id: "centerText",
                                                    beforeDraw(chart) {
                                                        const { width, height, ctx } = chart;
                                                        ctx.save();
                                                        ctx.font = "500 20px Arial";
                                                        ctx.fillStyle = "black";
                                                        ctx.textAlign = "center";
                                                        ctx.textBaseline = "middle";

                                                        const text = `${totalStorage} TB`;
                                                        const subText = "Disk total";
                                                        const x = width / 2;
                                                        const y = height / 2;

                                                        ctx.fillText(text, x, y);

                                                        ctx.font = "14px Arial";
                                                        ctx.fillStyle = "#06478C";
                                                        ctx.fillText(subText, x, y + 25);

                                                        ctx.restore();
                                                    },
                                                };

                                                const createDoughnutChart = (ctx, used, free) => {
                                                    return new Chart(ctx, {
                                                        type: "doughnut",
                                                        data: {
                                                            datasets: [
                                                                {
                                                                    data: [used, free],
                                                                    backgroundColor: [
                                                                        "#007bff",
                                                                        "#b3d8ff",
                                                                    ],
                                                                    borderColor: [
                                                                        "#007bff",
                                                                        "#b3d8ff",
                                                                    ],
                                                                },
                                                            ],
                                                        },
                                                        options: {
                                                            responsive: true,
                                                            maintainAspectRatio: false,
                                                            cutout: "70%",
                                                            plugins: {
                                                                legend: {
                                                                    display: false,
                                                                },
                                                                tooltip: {
                                                                    enabled: false,
                                                                },
                                                                centerText: centerTextPlugin,
                                                            },
                                                        },
                                                        plugins: [centerTextPlugin],
                                                    });
                                                };

                                                createBarChart(netOutCtx, netOutUsed, totalCapacity);
                                                createBarChart(netInCtx, netInUsed, totalCapacity);
                                                createBarChart(egressCtx, egress, totalAverageEgress);
                                                createBarChart(ingressCtx, ingress, totalAverageIngress);
                                                createBarChart(totalCtx, charttotal, total);
                                                createDoughnutChart(
                                                    storageTotalCtx,
                                                    usedStorage,
                                                    freeStorage
                                                );
                                            });

                                        const dropdownContainers = document.querySelectorAll(
                                            ".dropdown-container"
                                        );
                                        dropdownContainers.forEach((container) => {
                                            const dropdownButton =
                                                container.querySelector(".dropdown-button");
                                            const dropdownButtonText = container.querySelector(
                                                "#dropdown-button-text"
                                            );
                                            const dropdownList =
                                                container.querySelector(".dropdown-list");
                                            const dropdownItems =
                                                container.querySelectorAll(".dropdown-list li");
                                            dropdownButton.addEventListener("click", () => {
                                                dropdownList.classList.toggle("show");
                                            });

                                            dropdownItems.forEach((item) => {
                                                item.addEventListener("click", () => {
                                                    const selectedValue =
                                                        item.getAttribute("data-value");
                                                    const selectedText = item.textContent;

                                                    dropdownButtonText.textContent =
                                                        selectedText;

                                                    hideDropdownItem(selectedValue, container);

                                                    dropdownList.classList.remove("show");
                                                });
                                            });

                                            window.addEventListener("click", (event) => {
                                                document
                                                    .querySelectorAll(".dropdown-list")
                                                    .forEach((dropdownList) => {
                                                        if (
                                                            !event.target.closest(
                                                                ".dropdown-container"
                                                            )
                                                        ) {
                                                            dropdownList.classList.remove(
                                                                "show"
                                                            );
                                                        }
                                                    });
                                            });
                                            if (
                                                container.querySelector("#dropdown-button-text")
                                                    .textContent === "User Security"
                                            ) {
                                                hideDropdownItem("user-security", container);
                                            }
                                        });

                                        function hideDropdownItem(value, container) {
                                            const dropdownItems =
                                                container.querySelectorAll(".dropdown-list li");
                                            dropdownItems.forEach((item) => {
                                                if (item.getAttribute("data-value") === value) {
                                                    item.classList.add("hidden");
                                                } else {
                                                    item.classList.remove("hidden");
                                                }
                                            });
                                        }

                                        const dropdownToggle =
                                            document.getElementById("dropdownToggle");
                                        const dropdownOptions =
                                            document.getElementById("dropdownOptions");

                                        function toggleDropdown() {
                                            dropdownOptions.classList.toggle("show");

                                            if (dropdownOptions.classList.contains("show")) {
                                                window.addEventListener(
                                                    "click",
                                                    closeDropdownOutside
                                                );
                                            } else {
                                                window.removeEventListener(
                                                    "click",
                                                    closeDropdownOutside
                                                );
                                            }
                                        }

                                        function closeDropdownOutside(event) {
                                            const dropdown =
                                                document.querySelector(".dropdown");
                                            if (!dropdown.contains(event.target)) {
                                                dropdownOptions.classList.remove("show");
                                                window.removeEventListener(
                                                    "click",
                                                    closeDropdownOutside
                                                );
                                            }
                                        }

                                        dropdownToggle.addEventListener(
                                            "click",
                                            toggleDropdown
                                        );

                                        const checkboxes = document.querySelectorAll(
                                            '.dropdown-option input[type="checkbox"]'
                                        );
                                        checkboxes.forEach((checkbox) => {
                                            checkbox.addEventListener("change", function () {
                                                const value = this.value;
                                                const isChecked = this.checked;
                                            });
                                        });

                                        $(".tree-view .checkbox input + label").on(
                                            "click",
                                            function () {
                                                if (
                                                    $(this)
                                                        .parent()
                                                        .parent()
                                                        .hasClass("is-folder")
                                                ) {
                                                    var checkFolder =
                                                        $(this).closest(".is-folder");

                                                    checkFolder
                                                        .find(".checkbox")
                                                        .removeClass("partial-check");

                                                    if (
                                                        $(this)
                                                            .parent()
                                                            .find("input[type='checkbox']")
                                                            .is(":checked")
                                                    ) {
                                                        checkFolder
                                                            .find("input[type='checkbox']")
                                                            .prop("checked", false);
                                                    } else {
                                                        checkFolder
                                                            .find("input[type='checkbox']")
                                                            .prop("checked", true);
                                                    }
                                                } else {
                                                    $(this)
                                                        .closest(".is-folder")
                                                        .find(">.checkbox")
                                                        .addClass("partial-check");
                                                }
                                            }
                                        );

                                        $(".tree-view").click(function () {
                                            var Folder = $(this).find(".is-folder");

                                            $.each(Folder, function (i, item) {
                                                if ($(this).find("> ul input[checked]")) {
                                                    console.log(
                                                        "la carpeta " + i + " está llena"
                                                    );
                                                }
                                            });
                                        });

                                        $("a.folder-toggle").click(function () {
                                            var toggleTarget = $(this).closest(".is-folder");
                                            if (toggleTarget.hasClass("open")) {
                                                toggleTarget.removeClass("open");
                                            } else {
                                                toggleTarget.addClass("open");
                                            }
                                        });

                                        const saveSearchViewButton = document.getElementById(
                                            "saveSearchViewButton"
                                        );
                                        const addDevicePopub =
                                            document.getElementById("popub-add-device");
                                        const addLocationPopub = document.getElementById(
                                            "add-location-button"
                                        );
                                        const addWidget = document.getElementById(
                                            "add-widget"
                                        );
                                        const requestLocationPopub = document.getElementById(
                                            "reuqest-new-location"
                                        );
                                        const popubAdddevice = document.getElementById(
                                            "popub-add-device-management"
                                        );
                                        const popubAddWidget = document.getElementById(
                                            "popub-add-widget"
                                        );
                                        const popubAddlocation =
                                            document.getElementById("popub-add-location");
                                        const popubRequestlocation = document.getElementById(
                                            "popub-request-location"
                                        );
                                        const popupSearchView =
                                            document.querySelector(".popub-search-view");
                                        const closePopupButtons =
                                            document.querySelectorAll("#closePopupButton");
                                        const overlay = document.querySelector("#overlay");

                                        function openPopup(popup) {
                                            if (popup) {
                                                popup.style.display = "block";
                                                overlay.style.display = "block";
                                            }
                                        }

                                        function closePopup(popupToClose) {
                                            if (popupToClose) {
                                                popupToClose.style.display = "none";
                                            } else {
                                                [
                                                    popubAdddevice,
                                                    popubAddlocation,
                                                    popubRequestlocation,
                                                    popupSearchView,
                                                    popubAddWidget,
                                                ].forEach((popup) => {
                                                    if (popup) popup.style.display = "none";
                                                });
                                                overlay.style.display = "none";
                                            }
                                        }

                                        if (saveSearchViewButton && popupSearchView) {
                                            saveSearchViewButton.addEventListener(
                                                "click",
                                                function (event) {
                                                    event.preventDefault();
                                                    openPopup(popupSearchView);
                                                }
                                            );
                                        }

                                        if (addDevicePopub && popubAdddevice) {
                                            addDevicePopub.addEventListener(
                                                "click",
                                                function (event) {
                                                    event.preventDefault();
                                                    openPopup(popubAdddevice);
                                                }
                                            );
                                        }

                                        if (addLocationPopub && popubAddlocation) {
                                            addLocationPopub.addEventListener(
                                                "click",
                                                function (event) {
                                                    event.preventDefault();
                                                    openPopup(popubAddlocation);
                                                }
                                            );
                                        }

                                        if (addWidget && popubAddWidget) {
                                            addWidget.addEventListener(
                                                "click",
                                                function (event) {
                                                    event.preventDefault();
                                                    openPopup(popubAddWidget);
                                                }
                                            );
                                        }

                                        if (requestLocationPopub && popubRequestlocation) {
                                            requestLocationPopub.addEventListener(
                                                "click",
                                                function (event) {
                                                    event.preventDefault();
                                                    closePopup(popubAddlocation);
                                                    openPopup(popubRequestlocation);
                                                }
                                            );
                                        }

                                        closePopupButtons.forEach((button) => {
                                            button.addEventListener("click", function (event) {
                                                event.preventDefault();
                                                closePopup();
                                            });
                                        });

                                        if (overlay) {
                                            overlay.addEventListener("click", function (event) {
                                                event.preventDefault();
                                                closePopup();
                                            });
                                        }

                                        // show popup
                                        const digitalStorageCheckbox = document.getElementById('input-digital-storage');
                                        const deviceManagementCheckbox = document.getElementById('input-device-management');
                                        const scanDevicesCheckbox = document.getElementById('input-scan-devices');
                                        const restoreDataCheckbox = document.getElementById('input-restore-data');
                                        const locationCheckbox = document.getElementById('input-location');
                                        const securityCheckbox = document.getElementById('input-security');
                                        const connectivityCheckbox = document.getElementById('input-connectivity');
                                        const policiesCheckbox = document.getElementById('input-policies');
                                        const filesCheckbox = document.getElementById('input-files');

                                        const digitalStorageSection = document.getElementById('digital-storage');
                                        const deviceManagementSection = document.getElementById('device-management');
                                        const scanDevicesSection = document.getElementById('scan-devices');
                                        const restoreDataSection = document.getElementById('restore-data');
                                        const locationSection = document.getElementById('location');
                                        const securitySection = document.getElementById('security');
                                        const connectivitySection = document.getElementById('connectivity');
                                        const policiesSection = document.getElementById('policies');
                                        const filesSection = document.getElementById('main-content-popubs');

                                        const digitalStorageBox = document.getElementById('digital-storage-box');
                                        const deviceManagementBox = document.getElementById('device-management-box');
                                        const scanDevicesBox = document.getElementById('scan-devices-box');
                                        const restoreDataBox = document.getElementById('restore-data-box');
                                        const locationBox = document.getElementById('location-box');
                                        const securityBox = document.getElementById('security-box');
                                        const connectivityBox = document.getElementById('connectivity-box');
                                        const policiesBox = document.getElementById('policies-box');
                                        const filesBox = document.getElementById('main-content-box');

                                        function toggleSectionVisibility(checkbox, section) {
                                            if (section) {
                                                if (checkbox.checked) {
                                                    section.style.display = 'block';
                                                } else {
                                                    section.style.display = 'none';
                                                }
                                            } else {
                                                checkbox.disabled = true;
                                            }
                                        }

                                        digitalStorageCheckbox.checked = true;
                                        deviceManagementCheckbox.checked = true;
                                        scanDevicesCheckbox.checked = true;
                                        restoreDataCheckbox.checked = true;
                                        locationCheckbox.checked = true;
                                        securityCheckbox.checked = true;
                                        connectivityCheckbox.checked = true;
                                        policiesCheckbox.checked = true;
                                        filesCheckbox.checked = true;

                                        toggleSectionVisibility(digitalStorageCheckbox, digitalStorageSection);
                                        toggleSectionVisibility(deviceManagementCheckbox, deviceManagementSection);
                                        toggleSectionVisibility(scanDevicesCheckbox, scanDevicesSection);
                                        toggleSectionVisibility(restoreDataCheckbox, restoreDataSection);
                                        toggleSectionVisibility(locationCheckbox, locationSection);
                                        toggleSectionVisibility(securityCheckbox, securitySection);
                                        toggleSectionVisibility(connectivityCheckbox, connectivitySection);
                                        toggleSectionVisibility(policiesCheckbox, policiesSection);
                                        toggleSectionVisibility(filesCheckbox, filesSection);

                                        digitalStorageCheckbox.addEventListener('click', function () {
                                            event.stopPropagation();
                                            toggleSectionVisibility(digitalStorageCheckbox, digitalStorageSection);
                                        });

                                        deviceManagementCheckbox.addEventListener('click', function () {
                                            event.stopPropagation();
                                            toggleSectionVisibility(deviceManagementCheckbox, deviceManagementSection);
                                        });

                                        scanDevicesCheckbox.addEventListener('click', function () {
                                            event.stopPropagation();
                                            toggleSectionVisibility(scanDevicesCheckbox, scanDevicesSection);
                                        });

                                        restoreDataCheckbox.addEventListener('click', function () {
                                            event.stopPropagation();
                                            toggleSectionVisibility(restoreDataCheckbox, restoreDataSection);
                                        });

                                        locationCheckbox.addEventListener('click', function () {
                                            event.stopPropagation();
                                            toggleSectionVisibility(locationCheckbox, locationSection);
                                        });

                                        securityCheckbox.addEventListener('click', function () {
                                            event.stopPropagation();
                                            toggleSectionVisibility(securityCheckbox, securitySection);
                                        });

                                        connectivityCheckbox.addEventListener('click', function () {
                                            event.stopPropagation();
                                            toggleSectionVisibility(connectivityCheckbox, connectivitySection);
                                        });

                                        policiesCheckbox.addEventListener('click', function () {
                                            event.stopPropagation();
                                            toggleSectionVisibility(policiesCheckbox, policiesSection);
                                        });

                                        filesCheckbox.addEventListener('click', function () {
                                            event.stopPropagation();
                                            toggleSectionVisibility(filesCheckbox, filesSection);
                                        });

                                        function handleCheckboxChange(checkbox, section) {
                                            return function (event) {
                                                event.stopPropagation();
                                                checkbox.checked = !checkbox.checked;
                                                toggleSectionVisibility(checkbox, section);
                                            };
                                        }

                                        digitalStorageBox.addEventListener('click', handleCheckboxChange(digitalStorageCheckbox, digitalStorageSection));
                                        deviceManagementBox.addEventListener('click', handleCheckboxChange(deviceManagementCheckbox, deviceManagementSection));
                                        scanDevicesBox.addEventListener('click', handleCheckboxChange(scanDevicesCheckbox, scanDevicesSection));
                                        restoreDataBox.addEventListener('click', handleCheckboxChange(restoreDataCheckbox, restoreDataSection));
                                        locationBox.addEventListener('click', handleCheckboxChange(locationCheckbox, locationSection));
                                        securityBox.addEventListener('click', handleCheckboxChange(securityCheckbox, securitySection));
                                        connectivityBox.addEventListener('click', handleCheckboxChange(connectivityCheckbox, connectivitySection));
                                        policiesBox.addEventListener('click', handleCheckboxChange(policiesCheckbox, policiesSection));
                                        filesBox.addEventListener('click', handleCheckboxChange(filesCheckbox, filesSection));

                                        const moreIcons = document.querySelectorAll(".more-icon");
                                        let activeDropdown = null;

                                        moreIcons.forEach((moreIcon) => {
                                            const moreIconBox = moreIcon.closest(".more-icon-box");
                                            const dropdown = moreIconBox.querySelector(".icon-dropdown-menu");
                                            const section = moreIcon.closest("section");

                                            moreIcon.addEventListener("click", function (event) {
                                                event.stopPropagation();

                                                if (dropdown.style.display === "block") {
                                                    dropdown.style.display = "none";
                                                    activeDropdown = null;
                                                } else {
                                                    document.querySelectorAll(".icon-dropdown-menu").forEach((menu) => {
                                                        menu.style.display = "none";
                                                    });

                                                    const rect = moreIcon.getBoundingClientRect();
                                                    dropdown.style.top = `20px`;
                                                    dropdown.style.left = `-100px`;
                                                    dropdown.style.display = "block";

                                                    activeDropdown = dropdown;
                                                }
                                            });

                                            dropdown.addEventListener("click", function (event) {
                                                event.stopPropagation();
                                                if (event.target.classList.contains("action-item")) {
                                                    const sectionId = section.id;
                                                    const checkbox = document.querySelector(`input[type="checkbox"][data-section-id="${sectionId}"]`);

                                                    if (checkbox) {
                                                        checkbox.checked = false;
                                                        checkbox.dispatchEvent(new Event('change'));
                                                    }

                                                    section.style.display = "none";;
                                                    dropdown.style.display = "none";
                                                    activeDropdown = null;
                                                }
                                            });
                                        });

                                        document.addEventListener("click", function () {
                                            if (activeDropdown) {
                                                activeDropdown.style.display = "none";
                                                activeDropdown = null;
                                            }
                                        });

                                    });
                            }
                        })
                        .catch(error => console.error("error:", error));
                } else {
                    observer.observe(mainElement, { childList: true, subtree: true });
                }
            }

            requestAnimationFrame(processMutations);
        });

        observer.observe(mainElement, { childList: true, subtree: true });
    });
});