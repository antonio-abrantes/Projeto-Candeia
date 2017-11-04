/**
 * Created by Antonio Abrantes on 06/06/2017.
 */

$(function () {

    var homeId = document.getElementsByTagName("body")[0]["id"];
    //alert(homeAtiva.toString());
    verifica(homeId);
});

/*
*   Função que mantem o efeito de aba selecionada no menu superior de navegação
*
*   Cada html, tem um id para o body, onde ao iniciar, esse id é verificado e
*   a ele atribuido a classe "active-nome" correspondente.
*
*   Para modificar o efeito, as classes estão declaradas no arquivo "nav-bar.css"
*
* **/
function verifica(homeId) {
    if(homeId === "tab-principal"){

        $("#_home").addClass("active-inicio");

    }else if(homeId === "tab-servicos"){

        $("#_servico").addClass("active-servico")

    }else if(homeId === "tab-estudio"){

        $("#_estudio").addClass("active-o-estudio");

    }else if(homeId === "tab-portifolio"){

        $("#_portifolio").addClass("active-portfolio");

    }else if(homeId === "tab-orcamento"){

        $("#_contato").addClass("active-orcamento");

    }
}