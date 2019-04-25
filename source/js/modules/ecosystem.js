var ecosystem = {

    settings: {

        easing: 'easeInOutCubic',
        speed: 300

    },

    ready() {

/*
        $('div.gallery__slides--slick').slick({

            adaptiveHeight: true,
            arrows: false,
            easing: gallery.settings.easing,
            fade: true,
            pauseOnHover: false,
            speed: gallery.settings.speed,
            touchMove: false

        });

        $('div.gallery__slides--slick').on('beforeChange', function(event, slick, current, next) {

            var myDataID = $(this).data('id');

            $('div.gallery__controller.' + myDataID + ' ul li').removeClass('selected').eq(next).addClass('selected');

        });

        $('div.gallery__controller ul li a').click(function() {

            $('div.gallery__slides--slick.' + $(this).parents('div.gallery__controller').data('id')).slick('slickGoTo', $(this).data('key'));

        });

        $('div.gallery__controller ul').each(function() {

            $(this).find('li').first().addClass('selected');

        });
*/

    }

};

export default ecosystem;
