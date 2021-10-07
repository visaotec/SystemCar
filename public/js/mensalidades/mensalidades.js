$(document).ready(function () {

    /*Select2*/
    $('.select2').select2();

    /*Ao carregar a página, já inputa o valor vindo do banco*/
    $(".mensalidade_valor_mensalidade").val($(".precificacao").val().split(' ')[1]);
    $(".mensalista_dia_vencimento").val($(".mensalistas").val().split(' ')[1]);
    
    /*Ao carregar a página, já inputa o valor vindo do banco no hidden inputs*/
    $(".mensalidade_mensalista_id").val($(".mensalistas").val().split(' ')[0]);
    $(".mensalidade_precificacao_id").val($(".precificacao").val().split(' ')[0]);


    $("select.precificacao").change(function () {

        var categoria_selecionada = $(this).children("option:selected").val();

        $(".mensalidade_valor_mensalidade").val(categoria_selecionada.split(' ')[1]);
        $(".mensalidade_precificacao_id").val(categoria_selecionada.split(' ')[0]);

    });

    $("select.mensalistas").change(function () {

        var mensalista_selecionado = $(this).children("option:selected").val();

        $(".mensalista_dia_vencimento").val(mensalista_selecionado.split(' ')[1]);
        $(".mensalidade_mensalista_id").val(mensalista_selecionado.split(' ')[0]);
        
        console.log(mensalista_selecionado.split(' ')[1]);

    });

});