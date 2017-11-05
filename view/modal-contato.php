
<!-- Modal de contato - chamado dentro do footer.php -->
<div class="modal fade" id="modal-contato" role="dialog" style="z-index: 999999">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Envie sua dúvida ou sugestão.</h4>
            </div>
            <div class="modal-body">
                <form class="form" name='envia_mail' method="post" action="contato-menor-true">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputNome" class="control-label">Nome</label>
                                <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome" autofocus required>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail" class="control-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputTel" class="col-sm-2 control-label">Tel.:</label>
                            <input type="tel" class="form-control" id="inputTel" name="inputTel" placeholder="(00) 00000-0000" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputData" class="col-sm-1 control-label">Data</label>
                            <input type="date" min="2017-08-01" readonly value="<?php echo date("Y-m-d"); ?>" class="form-control" id="inputData" name="inputData" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="6" style="resize: none" placeholder="Digite sua mensagem" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button style="width: 100px" id="enviar" type="button" class="btn btn-success" data-dismiss="modal" >Enviar</button>
                        <button style="width: 100px" id="cancelar" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>