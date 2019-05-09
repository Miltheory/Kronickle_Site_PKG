import 'jquery.easing';
import 'slick-carousel';
import 'waypoints/lib/jquery.waypoints.min.js';

import AOS from 'aos';
import FastClick from 'fastclick';
// import lax from 'lax.js';
import MorphSVGPlugin from 'gsap/MorphSVGPlugin';
import TweenMax from 'gsap/TweenMax';

import anchor from './modules/anchor';
// import contact from './modules/contact';
import drawer from './modules/drawer';
import ecosystem from './modules/ecosystem';
import footer from './modules/footer';
import logo from './modules/logo';
import menu from './modules/menu';
import modal from './modules/modal';
import nav from './modules/nav';
import steps from './modules/steps';
import testimonials from './modules/testimonials';
import xhr from './modules/xhr';

$(document).ready(function() {

    FastClick.attach(document.body);

    anchor.ready();

//     contact.ready();

    drawer.ready();

    ecosystem.ready();

    footer.ready();

    logo.ready();

    menu.ready();

    nav.ready();

    modal.ready();

    steps.ready();

    testimonials.ready();

    xhr.ready();

    $(window).scrollTop(0);

    if('scrollRestoration' in history) history.scrollRestoration = 'manual';

});

$(window).resize(function() {

    setTimeout(function() {

        anchor.resize();

        menu.resize();

    }, 200);

});

$(window).scroll(function() {

    nav.scroll();

});

$(window).on('load', function() {

    $('body').removeClass('preload');

    anchor.load();



    AOS.init({

        duration: 600,
        easing: 'ease-out-quart',
        offset: 50

    });



/*
    lax.setup();

	const updateLax = () => {

		lax.update(window.scrollY);

		window.requestAnimationFrame(updateLax);

	}

	window.requestAnimationFrame(updateLax);
*/



});
