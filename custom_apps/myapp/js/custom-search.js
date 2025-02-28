window.onload = function () {
    const observer = new MutationObserver((mutationsList, observer) => {
        let placesMenu = document.querySelector('[data-cy-unified-search-filter="places"]');
        let dateMenu = document.querySelector('[data-cy-unified-search-filter="date"]');
        let peopleMenu = document.querySelector('[data-cy-unified-search-filter="people"]');

        if (placesMenu) {
            let iconWrapper = placesMenu.querySelector('.button-vue__icon');
            if (iconWrapper) {
                let newIcon = document.createElement('img');
                newIcon.src = '/custom_apps/myapp/img/places.svg';
                newIcon.alt = 'Custom Icon';
                newIcon.style.width = '20px';
                iconWrapper.innerHTML = '';
                iconWrapper.appendChild(newIcon);
            }
            observer.disconnect();
        }

        if (dateMenu) {
            let iconWrapperDate = dateMenu.querySelector('.button-vue__icon');
            if (iconWrapperDate) {
                let newIconDate = document.createElement('img');
                newIconDate.src = '/custom_apps/myapp/img/date.svg';
                newIconDate.alt = 'Custom Icon for Date';
                newIconDate.style.width = '20px';
                iconWrapperDate.innerHTML = '';
                iconWrapperDate.appendChild(newIconDate);
            }
            observer.disconnect();
        }

        if (peopleMenu) {
            let iconWrapperPeople = peopleMenu.querySelector('.button-vue__icon');
            if (iconWrapperPeople) {
                let newIconPeople = document.createElement('img');
                newIconPeople.src = '/custom_apps/myapp/img/peple.svg';
                newIconPeople.alt = 'Custom Icon for People';
                newIconPeople.style.width = '20px';
                iconWrapperPeople.innerHTML = '';
                iconWrapperPeople.appendChild(newIconPeople);
            }
            observer.disconnect();
        }

    });

    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
};
