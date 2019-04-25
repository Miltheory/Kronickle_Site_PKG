import anchor from './anchor';
import menu from './menu';

var drawer = {

    ready() {

        $('div.drawer ul li a.logo, div.drawer ul li a.link').click(function() {

            anchor.goto($(this).data('anchor'));

            menu.close();

        });

    }

};

export default drawer;
