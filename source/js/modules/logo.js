import anchor from './anchor';

var logo = {

    ready() {

        $('div.logo a').click(function() {

            anchor.goto($(this).data('anchor'));

        });

    }

};

export default logo;
