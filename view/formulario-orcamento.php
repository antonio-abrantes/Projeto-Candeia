<!-- FORMULARIO BRIEFING -->

<section id="section-contato">

    <div class="container">

        <div class="row">

            <div class="col-md-2"></div>

            <div class="col-md-8">
                <p class="txt-topo-contato" style="text-align: center; margin-left: 40px; margin-right: 40px;">
                    <b>
                        Um projeto de design requer um processo que começa com o briefing, que nada mais é que um
                        questionário, com o objetivo de captar o máximo de informações sobre o projeto para assim
                        dar direcionamento ao processo criativo.
                        <br>Todas as informações fornecidas aqui são para uso apenas dos
                        designers envolvidos no projeto, e não serão divulgadas.
                    </b>
                </p>
            </div>

            <div class="col-md-2"></div>

        </div>


        <div class="row visible-xs-block visible-sm-block">
            <div class="divisor-p"></div>
        </div>
        <div class="row">
            <div class="col-md-12 divisor-g visible-md-block visible-lg-block"></div>
        </div>
    </div>

    <div class="container">
        <div id="for-principal">
            <form action="cad_orcamento-true" method="POST" name="cad-orcamento" id="cad-orcamento" class="">
                <div class="row">
                    <div id="tit-briefing" class="col-md-3">
                        <h3>BRIEFING DE PROJETO</h3>
                        <h4>Candeia Design</h4>
                    </div>

                    <div class="col-md-5 form-horizontal">
                        <div class="form-group">
                            <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome" autofocus required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="form-group form-horizontal">
                            <label for="inputTel" class="col-sm-2 control-label">Tel.:</label>
                            <div class="col-sm-4">
                                <input type="tel" class="form-control" id="inputTel" name="inputTel" placeholder="(00) 00000-0000" required>
                            </div>

                            <label for="inputData" class="col-sm-1 control-label">Data</label>
                            <div class="col-sm-5">
                                <input type="date" readonly value="<?php echo date("Y-m-d"); ?>" class="form-control" id="inputData" name="inputData" required>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="col-md-12">
                            <h3>Tipo de projeto</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="ident-visual" name="identVisual" value="Identidade Visual"> Identidade Visual
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="design-interior" name="designInterior" value="Design de Interiores"> Design de Interiores
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="marcaSimples" name="marcaSimples" value="Marca Simples"> Marca Simples
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="opProduto" name="opProduto" value="Produto"> Produto
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- /FIM DO CABEÇALHO -->

                <!-- INICIO TEXTAREA  -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="campoAtuacao">1. Qual a área de atuação da sua empresa?</label>
                            <textarea class="form-control" id="campoAtuacao" name="campoAtuacao" rows="3" maxlength="250"></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="historiaEmpresa">2. Qual o histórico da sua empresa?</label>
                            <textarea class="form-control" id="historiaEmpresa" name="historiaEmpresa" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="missaoValores">3. Possui missão e valores? Quais são?</label>
                            <textarea class="form-control" id="missaoValores" name="missaoValores" rows="3"></textarea>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="publicoDesejado">4. Que público deseja alcançar?</label>
                            <textarea class="form-control" id="publicoDesejado" name="publicoDesejado" rows="3" placeholder="ex.: homens de 20 - 35 anos, classe média, etc."></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="objetivoNegocio">5. Cite adjetivos que definam seu negócio.</label>
                            <textarea class="form-control" rows="3" id="objetivoNegocio" name="objetivoNegocio" placeholder="ex.: sólido, inovador, atraente, etc."></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="possuiSlogan">6. Possui um slogam? Qual? Se não, gostaria
                                de um?</label>
                            <textarea class="form-control" rows="3" id="possuiSlogan" name="possuiSlogan" placeholder="ex.: Coca-cola, abra a felicidade."></textarea>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="msgParaPassar">7. Que mensagem ou sensação deseja passar?</label>
                            <textarea class="form-control" rows="3" id="msgParaPassar" name="msgParaPassar" placeholder="ex.: segurança, seriedade, dinamismo, etc."></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="produtosNoMercado">8. Quais produtos já estão no mercado?</label>
                            <textarea class="form-control" id="produtosNoMercado" name="produtosNoMercado" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="principaisConcorrentes">9. Quais são os principais concorrentes?</label>
                            <textarea class="form-control" id="principaisConcorrentes" name="principaisConcorrentes" rows="3"></textarea>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="produtosParaDesenvolver">10. Que produtos deverão ser desenvolvidos?</label>
                            <textarea class="form-control" id="produtosParaDesenvolver" name="produtosParaDesenvolver" rows="3" placeholder="ex.: cartão, site, papel timbrado, etc."></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="preferenciaDeMaterial">11. Existe preferência de cor ou material?</label>
                            <textarea class="form-control" id="preferenciaDeMaterial" name="preferenciaDeMaterial" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="restricao">12. Existe alguma restrição? Qual?</label>
                            <textarea class="form-control" id="restricao" name="restricao" rows="3"></textarea>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group" style="margin-top: 11px;">
                            <label for="dataDeLancamento">13. Há uma data para lançamento?</label>
                            <textarea class="form-control" id="dataDeLancamento" name="dataDeLancamento" rows="3" style="margin-top: 8px"></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="limiteDeOrcamento">14. Existe um limite de orçamento para produ-
                                ção dos materiais solicitados?</label>
                            <textarea class="form-control" id="limiteDeOrcamento" name="limiteDeOrcamento" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="informExtras">15. Fique a vontade para contribuir com qualquer
                                informação extra que considere importante
                                para o projeto.</label>
                            <textarea class="form-control" id="informExtras" name="informExtras" rows="3"></textarea>
                        </div>
                    </div>

                </div>

                <!-- / FIM DAS TEXTAREA  -->

                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning" style="width: 50%; margin-bottom: 30px; margin-top: 20px; margin-left: 89px;">ENVIAR!</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>

<!-- / FIM DO CORPO BRIEFING  -->