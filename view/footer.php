<!-- Inicio do rodapé da pagina  -->

<section id="section-rodape">

    <!-- Modais de confirmação -->
    <?php
        require_once 'view/modal-confirm.php';
    ?>

    <!-- Modal de contato -->
    <?php
        require_once 'view/modal-contato.php';
    ?>

    <div class="container-fluid faixa-azul">
        <div class="container">
            <div class="row text-center">
                <div id="logo-footer" class="col-md-4">
                    <img src="imagens/logobranco.png" alt="LOGOTIPO">
                    <!--h4>Design de Valor</h4-->
                </div>

                <div class="col-md-4" id="entre-contato">
                    <p>
                        <input type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-contato" id="btn-contato" value="ENTRE EM CONTATO" >
                    </p>
                    <h4>Solicite uma Visita</h4>
                    <h5>Tire suas dúvidas</h5>
                </div>

                <div class="col-md-4">

                    <div class="row">
                        <div id="solic-orcamento" class="col-md-9">
                            <h4>Prefere por mensagem? Ok!</h4>
                            <h5 id="telefone"><a class="fone" href="tel:+5583996122036" >(+55 83) 9 9612-2036</a></h5>
                        </div>
                        <div id="solic-orcamento-ico" class="col-lg-2" style="">
                            <a href="https://api.whatsapp.com/send?phone=5583996122036&text=Ola!"  class="btn btn-default btn-circle btn-lg"><i style="padding-top: 0" class="fa fa-whatsapp fa-2x"></i></a>
                        </div>
                    </div>

                    <div class="row" id="rede-sociais">
                        <div class="col-md-7" style="">
                            <h4 style="">Candeia na rede</h4>
                            <h5 style="">@candeiastudio</h5>
                        </div>

                        <div class="col-md-5" style="">
                            <a href="https://www.facebook.com/candeiastudio/" target="_blank" class="btn btn-default btn-circle btn-lg pull-left" >
                                <i style="padding-top: 2px" class="fa fa-facebook-f fa-2x"></i></a>
                            <a style="" href="https://www.instagram.com/candeiastudio/" target="_blank" class="insta btn-default btn-circle btn-lg pull-left"><i style="padding-top: 1px" class="fa fa-instagram fa-2x"></i></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rodape -->
<footer id="rodape">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <p class="p-descricoes">© 2017 Candeia Studio</p>
            </div>
            <div class="col-md-4 coded-by" >
                <a class="" style="text-decoration: none" href="https://tonhus.github.io/" target="_blank">Coded by Antônio Abrantes</a>
            </div>
        </div>
    </div>
</footer>
<!-- // Fim do Rodape -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/main.js"></script>
<script src="js/contato-modal.js"></script>