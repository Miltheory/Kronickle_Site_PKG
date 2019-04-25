var xhr = {

    settings: {

        pool: []

    },

    ready() {

        $(document).ajaxSend(function(e, jqXHR, options) {

            xhr.settings.pool.push(jqXHR);

        });

        $(document).ajaxComplete(function(e, jqXHR, options) {

            xhr.settings.pool = $.grep(xhr.settings.pool, function(x) { return x != jqXHR });

        });

    },

    abort() {

        $.each(xhr.settings.pool, function(idx, jqXHR) {

            jqXHR.abort();

        });

    }

};

export default xhr;
