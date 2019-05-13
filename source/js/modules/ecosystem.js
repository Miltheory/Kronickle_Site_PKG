import steps from './steps';

var ecosystem = {

    settings: {
        index: 0,
        degrees: 51.4285714
    },

    timeline: null,

    ready() {

        ecosystem.dots();

        var path__1 = MorphSVGPlugin.pathDataToBezier('#path__1');
        var path__2 = MorphSVGPlugin.pathDataToBezier('#path__2');
        var path__3 = MorphSVGPlugin.pathDataToBezier('#path__3');
        var path__4 = MorphSVGPlugin.pathDataToBezier('#path__4');
        var path__5 = MorphSVGPlugin.pathDataToBezier('#path__5');
        var path__6 = MorphSVGPlugin.pathDataToBezier('#path__6');
        var path__7 = MorphSVGPlugin.pathDataToBezier('#path__7');

        TweenMax.set($('div.icon'), {

            xPercent: -50,
            yPercent: -50

        });

        ecosystem.timeline = new TimelineMax()

        .to($('div.icon__1'), 6, { bezier:{ values: path__1, type: 'cubic' }, ease: 'Linear.easeNone', force3D: false}, 0)
        .to($('div.icon__2'), 6, { bezier:{ values: path__2, type: 'cubic' }, ease: 'Linear.easeNone', force3D: false}, 0)
        .to($('div.icon__3'), 6, { bezier:{ values: path__3, type: 'cubic' }, ease: 'Linear.easeNone', force3D: false}, 0)
        .to($('div.icon__4'), 6, { bezier:{ values: path__4, type: 'cubic' }, ease: 'Linear.easeNone', force3D: false}, 0)
        .to($('div.icon__5'), 6, { bezier:{ values: path__5, type: 'cubic' }, ease: 'Linear.easeNone', force3D: false}, 0)
        .to($('div.icon__6'), 6, { bezier:{ values: path__6, type: 'cubic' }, ease: 'Linear.easeNone', force3D: false}, 0)
        .to($('div.icon__7'), 6, { bezier:{ values: path__7, type: 'cubic' }, ease: 'Linear.easeNone', force3D: false}, 0)

        .progress(1).progress(0).pause();

        $('div.icon__1').addClass('selected');

    },

    random(min, max) {

        return min + Math.random() * (max - min);

    },

    dots() {

        $('div.icon__icon figure div').each(function() {

            TweenMax.to($(this), 1.0, {

                x: ecosystem.random(-6, 6),
                y: ecosystem.random(-6, 6),
                ease: 'Linear.easeNone',
                force3D: false,
                onComplete: ecosystem.dots

            });

        });

    },

    skip(index) {

        ecosystem.timeline.tweenFromTo(ecosystem.timeline.time(), index, {

            ease: 'Power3.easeOut',
            force3D: false,
            immediateRender: false

        });

        $('div.icon').removeClass('selected');

        $('div.icon__' + (index + 1)).addClass('selected');

    },

    arrows(index) {

        if(index != ecosystem.settings.index) {

            ecosystem.settings.index = index;

            TweenMax.to($('div.ecosystem__arrows figure'), 1.6, {

                rotation: index * ecosystem.settings.degrees,
                ease: 'Power2.easeOut',
                force3D: false

            });

        }

    }

};

export default ecosystem;
