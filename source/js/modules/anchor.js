import menu from './menu';

var anchor = {

    settings: {

        easing: 'easeOutQuart',
        desktop: 79,
        mobile: 59,
        nav: 0,
        speed: 900

    },

    ready() {

        anchor.resize();

    },

    resize() {

        if($(window).width() >= 1024) {

            anchor.settings.nav = anchor.settings.desktop;

        } else {

            anchor.settings.nav = anchor.settings.mobile;

        }

    },

    load() {

        anchor.resize();

        var myWaypointDown = $('div.waypoint').waypoint(function(direction) {

            if(direction === 'down') {

                $('div.nav__options ul li').removeClass('selected');
                $('div.nav__options ul li.nav--' + this.element.id).addClass('selected');

            }

        }, {

            offset: function() {

                return anchor.settings.nav;

            }

        });

        var myWaypointUp = $('div.waypoint').waypoint(function(direction) {

            if(direction === 'up') {

                $('div.nav__options ul li').removeClass('selected');
                $('div.nav__options ul li.nav--' + this.element.id).addClass('selected');

            }

        }, {

            offset: function() {

                return anchor.settings.nav - this.element.clientHeight;

            }

        });

    },

    goto(id) {

//         anchor.resize();

        $('body, html').on('DOMMouseScroll keyup mousedown mousewheel scroll touchmove wheel', function() {

            $('body, html').stop();

        });

        $('body, html').animate({

            scrollTop: $('div.' + id).offset().top - anchor.settings.nav

        }, anchor.settings.speed, anchor.settings.easing, function() {

            $('body, html').off('DOMMouseScroll keyup mousedown mousewheel scroll touchmove wheel');

        });

        if($('div.menu').hasClass('menu--open')) menu.close();

    }

};

export default anchor;
