$(document).ready(function () {

    $("select.precificacao").change(function () {

        var categoria_selecionada = $(this).children("option:selected").val();

        $(".estacionar_valor_hora").val(categoria_selecionada.substring(1, 6));        

    });

});