
    <?php
        require_once "view/header.php";
        // CSS do portifolio
        echo '<link rel="stylesheet" href="css/estilo-portifolio.css" type="text/css" media="all">';
    ?>
    </head>
<body id="tab-portifolio">
<!-- Barra de nevgação  -->
    <?php
        require_once "view/navbar.php";
    ?>

<!-- INICIO DO CONTEUDO DA SEÇÃO -->

<section>
    <div class="container-fluid">
        <div class="row" id="cabecalho">

            <div class="col-md-12 text-center">
                <div class="page-header">
                    <h3 style="font-size: 18px;">Junho de 2016 - Junho de 2017</h3>
                </div>
            </div>

        </div>
    </div>

    <div class="container fundo-texto" id="portifolios" >
        <div class="div-divisao"></div>

        <!-- PRIMEIRA LINHA -->

        <div class="row text-justify marg-competencia">
            <div class="col-md-4 portifolio">

                <div >
                    <img alt="Bootstrap Image Preview" src="imagens/imagem1.JPG" class="img-rounded img-responsive portifolio-img" />
                </div>

                <div class="titulo-portifolio text-center" hidden>
                    <div class="text-center">
                        <h1 style="">GABINETTO MÓVEIS</h1>
                        <h3 style="">Redesign e Identidade visual</h3>
                        <a href="section-gabinetto.html" hidden></a>
                    </div>
                </div>


            </div>
            <div class="col-md-4 portifolio">

                <div >
                    <img alt="Bootstrap Image Preview" src="imagens/previewnana.JPG" class="img-rounded img-responsive portifolio-img" />
                </div>

                <div class="titulo-portifolio text-center" hidden>
                    <div class="text-center">
                        <h1 style="">CUMADE NANA FITOSCOSMÉTICOS</h1>
                        <h3 style="">Branding</h3>
                        <a href="section-nana.html" hidden></a>
                    </div>
                </div>


            </div>
            <div class="col-md-4 portifolio">

                <div >
                    <img alt="Bootstrap Image Preview" src="imagens/previewbtq.JPG" class="img-rounded img-responsive portifolio-img" />
                </div>


                <div class="titulo-portifolio text-center" hidden>
                    <div class="text-center">
                        <h1 style="">BOUTIQUE CAROLINA MELO</h1>
                        <h3 style="">Naming & Branding</h3>
                        <a href="section-btq.html" hidden></a>
                    </div>
                </div>

            </div>
        </div>

        <!-- SEGUNDA LINHA -->

        <div class="row text-justify">

            <div class="col-md-4 portifolio">

                <div >
                    <img alt="Bootstrap Image Preview" src="imagens/previewplt.JPG" class="img-rounded img-responsive portifolio-img" />
                </div>


                <div class="titulo-portifolio text-center" hidden>
                    <div class="text-center">
                        <h1 style="">PALLET NEGÓCIOS IMOBILIÁRIOS</h1>
                        <h3 style="">Identidade visual</h3>
                        <a href="section-plt.html" hidden></a>
                    </div>
                </div>

            </div>

            <div class="col-md-4 portifolio">

                <div >
                    <img alt="Bootstrap Image Preview" src="imagens/previewwalkiria.JPG" class="img-rounded img-responsive portifolio-img" />
                </div>


                <div class="titulo-portifolio text-center" hidden>
                    <div class="text-center">
                        <h1 style="">WALKIRIA CABELEIREIRO</h1>
                        <h3 style="">Redesign</h3>
                        <h3>Coautores: Thardife Vieira e Kaouê Souza</h3>
                        <a href="section-walkiria.html" hidden></a>
                    </div>
                </div>

            </div>

            <div class="col-md-4 portifolio">

                <div >
                    <img alt="Bootstrap Image Preview" src="imagens/previewbaco.JPG" class="img-rounded img-responsive portifolio-img" />
                </div>


                <div class="titulo-portifolio text-center" hidden>
                    <div class="text-center">
                        <h1 style="">BACO VINHOS FINOS</h1>
                        <h3 style="">Redesign e fotografia de produtos</h3>
                        <a href="section-baco.html" hidden></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section  id="section-detalhes">
    <div class="container">

        <div id="processando" hidden>
            <h1>SOLICITANDO PORTIFÓLIO...</h1>
        </div>

        <div class="row" id="detalhe-portifolio" name="detalhe-portifolio" hidden>

            <!-- CONTEUDO REQUISITADO COM AJAX -->


        </div>

        <div class="div_botao_voltar" hidden>
            <p class="bt-voltar">VOLTAR</p>
        </div>

    </div>
</section>

<!-- / FIM DAS SUB-SEÇÕES  -->

<!-- Inicio do rodapé da pagina  -->
    <?php
        require_once "view/footer.php";
        echo '<script src="js/funcoes-portifolio.js" type="text/javascript"></script>';
    ?>
</body>
</html>