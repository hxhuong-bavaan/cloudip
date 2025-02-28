$(document).ready(function () {
    const customMenuItem = document.createElement('div');
    customMenuItem.innerHTML = 'Dashboard';
    customMenuItem.classList.add('custom-dashboard-item', 'another-class');

    const customMenuItemAccount = document.createElement('div');
    customMenuItemAccount.innerHTML = 'Account';
    customMenuItemAccount.classList.add('custom-account-item', 'another-class');

    const customMenuItemContact = document.createElement('div');
    customMenuItemContact.innerHTML = 'Contact';
    customMenuItemContact.classList.add('custom-contact-item', 'another-class');


    const menuList = document.querySelector('#app-navigation-vue[aria-label="Files"]');
    setTimeout(function () {
        const menuListAccount = document.querySelector('#content-vue.app-settings .app-navigation #app-navigation-vue[aria-label="Account management"] ');
        if (menuListAccount) {
            menuListAccount.appendChild(customMenuItemAccount);
        }
    }, 100)

    const menuListContact = document.querySelector('#content-vue.app-contacts #app-navigation-vue');

    if (menuList) {
        menuList.appendChild(customMenuItem);
    }

   

    if (menuListContact) {
        menuListContact.appendChild(customMenuItemContact);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    localStorage.setItem('menuState', 'always-displayed');
});
