var testimonials = {

    settings: {

        easing: 'easeOutQuart',
        speed: 300

    },

    ready() {

        $('div.testimonials__testimonials').slick({

            adaptiveHeight: true,
            arrows: false,
            easing: testimonials.settings.easing,
            fade: true,
            pauseOnHover: false,
            speed: testimonials.settings.speed,
            swipe: false,
            touchMove: false

        });

        $('div.testimonials__testimonials').on('beforeChange', function(event, slick, current, next) {

            $('div.testimonials__controller ul li').removeClass('selected').eq(next).addClass('selected');

        });

        $('div.testimonials__controller ul li a').click(function() {

            $('div.testimonials__testimonials').slick('slickGoTo', $(this).data('key'));

        });

        $('div.testimonials__controller ul').each(function() {

            $(this).find('li').first().addClass('selected');

        });

    }

};

export default testimonials;
