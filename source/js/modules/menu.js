import { disableBodyScroll, enableBodyScroll, clearAllBodyScrollLocks } from 'body-scroll-lock';

var menu = {

    settings: {

        ready: false

    },

    ready() {

        $('div.menu button').click(function() {

            if($('div.menu').hasClass('menu--open')) {

                menu.close();

            } else {

                menu.open();

            }

        });

        $(document).keyup(function(e) {

            if(e.keyCode === 27 && $('div.menu').hasClass('menu--open')) menu.close();

        });

        menu.settings.ready = true;

    },

    open() {

        if(menu.settings.ready == true) {

            menu.settings.ready = false;

            disableBodyScroll(document.querySelector('div.drawer'));

            $('div.menu').addClass('menu--open');

            $('div.drawer').addClass('drawer--open drawer--visible');

            $('div.drawer').one('transitionend mozTransitionEnd msTransitionEnd oTransitionEnd webkitTransitionEnd', function() {

                $('div.drawer').off('transitionend mozTransitionEnd msTransitionEnd oTransitionEnd webkitTransitionEnd');

                menu.settings.ready = true;

            });

        }

    },

    close() {

        if(menu.settings.ready == true) {

            menu.settings.ready = false;

            $('div.menu').removeClass('menu--open');

            $('div.drawer').addClass('drawer--close');

            $('div.drawer').one('transitionend mozTransitionEnd msTransitionEnd oTransitionEnd webkitTransitionEnd', function() {

                clearAllBodyScrollLocks();

                $('div.drawer').removeClass('drawer--open drawer--close drawer--visible');

                $('div.drawer').off('transitionend mozTransitionEnd msTransitionEnd oTransitionEnd webkitTransitionEnd');

                $('div.drawer').scrollTop(0);

                menu.settings.ready = true;

            });

        }

    }

};

export default menu;
