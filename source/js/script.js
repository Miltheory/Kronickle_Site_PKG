import 'jquery.easing';
import 'slick-carousel';
import 'waypoints/lib/jquery.waypoints.min.js';

import AOS from 'aos';
import FastClick from 'fastclick';

import anchor from './modules/anchor';
// import contact from './modules/contact';
import drawer from './modules/drawer';
import ecosystem from './modules/ecosystem';
import footer from './modules/footer';
import menu from './modules/menu';
import modal from './modules/modal';
import nav from './modules/nav';
import testimonials from './modules/testimonials';
import xhr from './modules/xhr';

$(document).ready(function() {

/*
    AOS.init({

        duration: 600,
        easing: 'ease-out-cubic',
        offset: 50

    });
*/

    FastClick.attach(document.body);

    anchor.ready();

//     contact.ready();

    drawer.ready();

    ecosystem.ready();

    footer.ready();

    menu.ready();

    nav.ready();

    modal.ready();

    testimonials.ready();

    xhr.ready();

});

$(window).resize(function() {

    setTimeout(function() {

        anchor.resize();

    }, 200);

});

$(window).scroll(function() {

    nav.scroll();

});

$(window).on('load', function() {

    $('body').removeClass('preload');

    anchor.load();

});
