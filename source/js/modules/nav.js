import anchor from './anchor';

var nav = {

    ready() {

        $('div.nav__options a').click(function() {

            anchor.goto($(this).data('anchor'));

        });

    },

    scroll() {

        if($(window).scrollTop() > 0) {

            $('div.nav').addClass('nav--slim');

            $('div.logo').addClass('logo--slim');

            $('div.menu').addClass('menu--slim');

        } else {

            $('div.nav').removeClass('nav--slim');

            $('div.logo').removeClass('logo--slim');

            $('div.menu').removeClass('menu--slim');

        }

    }

};

export default nav;
