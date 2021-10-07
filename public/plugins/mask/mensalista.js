$(document).ready(function ($) {

    var pessoa_fisica = $('#pessoa_fisica');
    var pessoa_juridica = $('#pessoa_juridica');

    if (pessoa_fisica.is(":checked")) {

        $('.pessoa_juridica').hide();
        $('.pessoa_fisica').show();
    }

    if (pessoa_juridica.is(":checked")) {

        $('.pessoa_fisica').hide();
        $('.pessoa_juridica').show();
    }

    pessoa_fisica.click(function () {

        $('.pessoa_juridica').hide();
        $('.pessoa_fisica').show();

    });

    pessoa_juridica.click(function () {

        $('.pessoa_fisica').hide();
        $('.pessoa_juridica').show();
    });

});