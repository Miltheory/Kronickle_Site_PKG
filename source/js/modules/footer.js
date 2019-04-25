import anchor from './anchor';

var footer = {

    ready() {

        $('div.footer__scroll a').click(function() {

            anchor.goto($(this).data('anchor'));

        });

    }

};

export default footer;
