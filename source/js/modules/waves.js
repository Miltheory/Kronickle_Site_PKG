var waves = {

    ready() {

        TweenMax.set([

            $('#intro__wave__1'),
            $('#intro__wave__2'),
            $('#intro__wave__3'),
            $('#intro__wave__4')

        ], {

            transformOrigin: '50% 0%'

        });



        TweenMax.set([

            $('#benefits__wave__1'),
            $('#benefits__wave__2'),
            $('#benefits__wave__3'),
            $('#benefits__wave__4'),

            $('#demo__wave__1'),
            $('#demo__wave__2'),
            $('#demo__wave__3'),
            $('#demo__wave__4')

        ], {

            transformOrigin: '50% 100%'

        });



        TweenMax.set($('#intro__wave__1'), {

            scaleY: 0.95,
            x: '-6%'

        });

        TweenMax.set($('#intro__wave__2'), {

            scaleX: 1.0,
            scaleY: 0.9,
            x: '10%'

        });

        TweenMax.set($('#intro__wave__3'), {

            scaleX: 1.0,
            scaleY: 0.9,
            x: '-10%'

        });

        TweenMax.set($('#intro__wave__4'), {

            scaleX: 0.9,
            scaleY: 1.0,
            x: '-10%'

        });



        TweenMax.set($('#benefits__wave__1'), {

            scaleY: 0.9,
            x: '-6%'

        });

        TweenMax.set($('#benefits__wave__2'), {

            scaleX: 1.1,
            scaleY: 0.9,
            x: '10%'

        });

        TweenMax.set($('#benefits__wave__3'), {

            scaleX: 1.0,
            scaleY: 0.9,
            x: '-10%'

        });

        TweenMax.set($('#benefits__wave__4'), {

            scaleX: 1.1,
            scaleY: 0.9,
            x: '-10%'

        });



        TweenMax.set($('#demo__wave__1'), {

            scaleY: 0.95,
            x: '-6%'

        });

        TweenMax.set($('#demo__wave__2'), {

            scaleX: 1.1,
            scaleY: 1.0,
            x: '10%'

        });

        TweenMax.set($('#demo__wave__3'), {

            scaleX: 0.8,
            scaleY: 0.9,
            x: '-10%'

        });

        TweenMax.set($('#demo__wave__4'), {

            scaleX: 0.9,
            scaleY: 0.9,
            x: '-10%'

        });



        TweenMax.to($('#intro__wave__1'), 5, {

            x: '6%',
            scaleY: 0.8,
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });

        TweenMax.to($('#intro__wave__2'), 15, {

            delay: 6,
            scaleX: 0.9,
            scaleY: 1.0,
            x: '-80%',
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });

        TweenMax.to($('#intro__wave__3'), 23, {

            delay: 3,
            scaleX: 0.9,
            scaleY: 1.0,
            x: '80%',
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });

        TweenMax.to($('#intro__wave__4'), 19, {

            scaleX: 1.0,
            scaleY: 0.9,
            x: '80%',
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });



        TweenMax.to($('#benefits__wave__1'), 7, {

            x: '6%',
            scaleY: 0.8,
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });

        TweenMax.to($('#benefits__wave__2'), 15, {

            delay: 3,
            scaleX: 0.9,
            scaleY: 1.0,
            x: '-80%',
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });

        TweenMax.to($('#benefits__wave__3'), 19, {

            scaleX: 0.9,
            scaleY: 1.0,
            x: '80%',
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });

        TweenMax.to($('#benefits__wave__4'), 23, {

            delay: 6,
            scaleX: 0.9,
            scaleY: 0.8,
            x: '80%',
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });



        TweenMax.to($('#demo__wave__1'), 6, {

            x: '6%',
            scaleY: 0.85,
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });

        TweenMax.to($('#demo__wave__2'), 19, {

            delay: 4,
            scaleX: 0.9,
            scaleY: 0.9,
            x: '-80%',
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });

        TweenMax.to($('#demo__wave__3'), 15, {

            delay: 8,
            scaleX: 1.1,
            scaleY: 1.0,
            x: '80%',
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });

        TweenMax.to($('#demo__wave__4'), 23, {

            scaleX: 1.1,
            scaleY: 0.8,
            x: '80%',
            repeat: -1,
            ease: 'Sine.easeInOut',
            force3D: false,
            yoyo: true

        });



    }

};

export default waves;
