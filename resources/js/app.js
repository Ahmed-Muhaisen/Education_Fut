import './bootstrap';

import Alpine from 'alpinejs';
    mix.combine([
        'files/jquery.js',
    ]);
window.Alpine = Alpine;

Alpine.start();

Echo.private('App.Models.User.1')
    .notification((notification) => {
        console.log(notification.data);
    });
