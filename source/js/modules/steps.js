import ecosystem from './ecosystem';

var steps = {

    settings: {

        easing: 'easeOutQuart',
        speed: 600

    },

    ready() {

        $('div.steps__steps').slick({

            adaptiveHeight: true,
            arrows: false,
            easing: steps.settings.easing,
            pauseOnHover: false,
            speed: steps.settings.speed

        });

        $('div.steps__steps').on('beforeChange', function(event, slick, current, next) {

            ecosystem.arrows(next);

            ecosystem.skip(next);

        });

        $('div.steps__control--prev a').click(function() {

            $('div.steps__steps').slick('slickPrev');

        });

        $('div.steps__control--next a').click(function() {

            $('div.steps__steps').slick('slickNext');

        });

    }

};

export default steps;
