import { disableBodyScroll, enableBodyScroll, clearAllBodyScrollLocks } from 'body-scroll-lock';

import contact from './contact';
import xhr from './xhr';

var modal = {

    settings: {

        ready: true

    },

    ready() {

        $('a.js-modal-contact').click(function() {

            modal.open('contact');

        });

        $('a.js-modal-privacy').click(function() {

            modal.open('privacy');

        });

        $('div.modal__button button').click(function() {

            modal.close();

        });

        $(document).keyup(function(e) {

            if(e.keyCode === 27 && $('div.modal').hasClass('modal--open')) modal.close();

        });

    },

    open(url) {

        if(!$('div.modal').hasClass('modal--open')) {

            disableBodyScroll(document.querySelector('div.modal'));

            $('div.modal').addClass('modal--open modal--visible');

            modal.load(url);

        }

    },

    close() {

        $('div.modal').addClass('modal--close');

        $('div.modal').one('transitionend mozTransitionEnd msTransitionEnd oTransitionEnd webkitTransitionEnd', function() {

            if(!$('div.drawer').hasClass('drawer--open')) clearAllBodyScrollLocks();

            $('div.modal').empty();

            $('div.modal').removeClass('modal--open modal--close modal--visible');

            $('div.modal').off('transitionend mozTransitionEnd msTransitionEnd oTransitionEnd webkitTransitionEnd');

        });

        xhr.abort();

    },

    load(url) {

        if(modal.settings.ready) {

            modal.settings.ready = false;

            $.get(url, function(data) {

                $('div.modal').html(data);

                if(url == 'contact') contact.ready();

                modal.ready();

                modal.settings.ready = true;

            });

        }

    }

};

export default modal;
