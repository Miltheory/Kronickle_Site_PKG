import modal from './modal';

var contact = {

    settings: {

        easing: 'easeOutQuart',
        ready: false,
        speed: 300

    },

    ready() {

        $('div.contact button').on('click', function(e) {

            e.preventDefault();

            contact.validate();

        });

        $('div.contact input, div.contact select, div.contact textarea').focus(function() {

            $('div.contact fieldset').removeClass('error');

            $('div.contact__feedback').empty();

        });

    },

    validate() {

        var myFormError = false;
        var myFormName = $('div.contact #name').val();
        var myFormEmail = $('div.contact #email').val();
        var myFormCompanyName = $('div.contact #companyname').val();
        var myFormCompanyType = $('div.contact #companytype').val();
        var myFormMessage = $('div.contact #message').val();

        if(!myFormName) {

            myFormError = true;

            $('div.contact #name').parent('fieldset').addClass('error');

            $('div.contact__feedback').html('<p>Please enter your name.</p>');

            return false;

        } else if((myFormEmail.length < 6) || (myFormEmail.indexOf(',') >= 0) || (myFormEmail.indexOf(';') >= 0) || (myFormEmail.indexOf(':') >= 0) || (myFormEmail.indexOf('/') >= 0) || (myFormEmail.indexOf(' ') >= 0) || (myFormEmail.indexOf('@') <= 0) || (myFormEmail.indexOf('@') != myFormEmail.lastIndexOf('@')) || (myFormEmail.lastIndexOf('.') < myFormEmail.indexOf('@')) || ((myFormEmail.lastIndexOf('.') + 3) > myFormEmail.length)) {

            myFormError = true;

            $('div.contact #email').parent('fieldset').addClass('error');

            $('div.contact__feedback').html('<p>Please enter a valid email.</p>');

            return false;

        } else if(!myFormCompanyName) {

            myFormError = true;

            $('div.contact #companyname').parent('fieldset').addClass('error');

            $('div.contact__feedback').html('<p>Please enter your company name.</p>');

            return false;

        } else if(!myFormCompanyType) {

            myFormError = true;

            $('div.contact #companytype').parent('fieldset').addClass('error');

            $('div.contact__feedback').html('<p>Please select your company type.</p>');

            return false;

        } else if(!myFormMessage) {

            myFormError = true;

            $('div.contact #message').parent('fieldset').addClass('error');

            $('div.contact__feedback').html('<p>Please enter your message.</p>');

            return false;

        } else if(!myFormError) {

            $('div.contact button').attr('disabled', 'disabled');

            $.post('/-/inc/contact.php', $('div.contact form').serialize(), function() {

                $('div.contact form').trigger('reset');

                $('div.contact input, div.contact textarea').val('');

                $('div.contact button').removeAttr('disabled');

                $('div.contact__feedback').delay(100).html('<p>Your message has been sent.</p>').stop().animate({

                    opacity: 1

                }, contact.settings.speed, contact.settings.easing, function() {

                    $(this).delay(contact.settings.speed * 6).animate({

                        opacity: 0

                    }, contact.settings.speed, function() {

                        $(this).empty().css({

                            opacity: 1

                        });

                    });

                });

            });

        }

    }

};

export default contact;
