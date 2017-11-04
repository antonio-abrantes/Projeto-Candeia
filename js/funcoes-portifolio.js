/**
 * Created by Antonio on 18/09/2017.
 */

/**
 * NOTA: Procurar css que centraliza nos videos da balta.io
 * */

$(function () {

    // Versão com jQuery
    //$(".titulo-portifolio").hide();

    $("#detalhe-portifolio").hide();

    // Versão com javascript puro
    var divsPortifolio = document.getElementsByClassName("titulo-portifolio");

    for(i = 0; i < divsPortifolio.length; i++){
        divsPortifolio[i].style.display = "none";
    }

    $(".portifolio").mouseenter(function () {
        $(this).find(".titulo-portifolio").fadeIn(500);
        $(this).find(".portifolio-img").css({
            "border": "none"
        });

    }).mouseleave(function () {
        $(".titulo-portifolio").fadeOut(500);
        $(this).find(".portifolio-img").css({
            "border": "1px solid #bdc3c7"
        });
    });

    $(".titulo-portifolio").on("click", function () {

        //$("#detalhe-portifolio").html("");
        //console.log($(this).find("a").attr('href'));
        //REQ_AJAX_GET($(this).find("a").attr('href'));
        AJAX_REQ_DIV_DETALHES($(this).find("a").attr('href'));


    });

    function REQ_AJAX_GET(url) {

        $.get(
            'view/'+url,
            function(data) {
                $("#detalhe-portifolio").html(data).fadeIn(1000);
                showBotaoVoltar();
            }
        );
    }

    //Função que faz a requisição do fragmento html com os detalhes do portifolio escolhido
    function AJAX_REQ_DIV_DETALHES(url) {
        $.ajax({
            url: 'view/'+url,
            type: "GET",
            beforeSend : function () {
                $('#processando').show();
            },
            success: function (retorno) {
                $("#cabecalho").fadeOut(500);
                $("#portifolios").fadeOut(500);
                $("#detalhe-portifolio").html(retorno).fadeIn(1000);
                $(".div_botao_voltar").show("slow");
                $('#processando').hide();
                //window.scrollTo(0, 0);  //Topo com javaScript
                $('html, body').animate({scrollTop:0}, 'fast'); //Topo com jquery - slow, medium, fast
                showBotaoVoltar();
            }
        });
    }

    //Função que caputura a movimentação na tela
    $(window).scroll(function () {
        showBotaoVoltar();
    });

    //Fazer botão voltar aparecer e atulaiza a posição
    function showBotaoVoltar() {
        set = $(document).scrollTop()+"px";
        jQuery('.div_botao_voltar').animate(
            {top:set},
            {duration:1000, queue:false}
        );
    }

    //Função que reetorna a pagina principal dos portifólios
    $(".div_botao_voltar").on("click", function () {
        $('html, body').animate({scrollTop:0}, 'medium'); //Topo com jquery - slow, medium, fast
        $("#detalhe-portifolio").hide("slow");
        $("#cabecalho").fadeIn(500);
        $("#portifolios").fadeIn(500);

        $(this).hide("slow");
    });

});