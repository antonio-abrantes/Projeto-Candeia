$(function () {

    $("#enviar").on('click', function () {
        montarJsonContato();
    });
    
    function montarJsonContato() {

        var inputNome = $("#inputNome").val();
        var inputEmail = $("#inputEmail").val();
        var mensagem = $("#mensagem").val();
        var inputTel = $("#inputTel").val();
        var inputData = $("#inputData").val();

        var contato = {
            'inputNome': inputNome ,
            'inputEmail': inputEmail,
            'mensagem' : mensagem,
            'inputTel' : inputTel,
            'inputData' : inputData
        };

        //console.log(contato);
        enviarContato(contato);

    }

    function enviarContato(contato) {
        $.ajax(
            {
                url: 'envio-contato',
                type: "POST",
                data: {contato :contato},
                success: function (retorno) {
                    console.log(retorno.length);
                    console.log(retorno);

                    var data = null;

                   if(retorno.length <= 34){
                       data = JSON.parse(retorno);

                       if(data['response'] === true){
                           modalConfirmSuccess(); //Caso ocorra tudo correto na rquisição...
                           $("#inputNome").val("");
                           $("#inputEmail").val("");
                           $("#mensagem").val("");
                           $("#inputTel").val("");
                           $("#inputData").val("");
                       }else{
                           modalConfirmError();  //Caso ocorra algo errado no retorno requisição...
                       }
                   }

                    if(data === null){
                        modalConfirmError();  //Caso ocorra algo errado no retorno requisição...
                    }

                },
                error: function (ajaxContext) {
                    modalConfirmError();  //Caso ocorra algo errado na requisição...
                }
            }
        );
    }

    function modalConfirmSuccess() {
        $.ajax(
            {
                url: 'view/msg-confirm.php',
                type: "GET",
                success: function (retorno) {
                    //console.log(retorno);

                    $("#div-confirmacao").append(retorno);
                    $('#modal-confirm').modal('show');

                }
            }
        );
    }

    function modalConfirmError() {
        $.ajax(
            {
                url: 'view/msg-error.php',
                type: "GET",
                success: function (retorno) {
                    //console.log(retorno);

                    $("#div-confirmacao").append(retorno);
                    $('#modal-error').modal('show');

                }
            }
        );
    }

    $("#btn-contato").on("click", function () {
        $("#div-confirmacao").html("");
    });

    console.log("Iniciado javascript do modal..."); //Script do contato modal...
});
