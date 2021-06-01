<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12 col-md-offset-3">
            <form method="post" id="formLogin" class="form-horizontal" role="form"
                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"

                  action="<?= BASEURL .$data['redirect'] ?>"
                  >
                <div  class="form-cadastro">
                    <h4><i class="glyphicon glyphicon-user"></i> Novo Cadastro <span class="observacao-usuarios">*Campos obrigatórios</span></h4>
                    <hr>
                    <p>Preencha corretamente os campos abaixo para efetuar seu cadastro:</p>
                    <div class="form-group">
                        <label class="control-label">Cód. do Produto:</label>
                        <div class="col-sm-1">
                            <input type="text"  name="codProduto" id="cod_ean"  class="form-control" placeholder="Recomendado que seja o código EAN de barras" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descricao<span class="asterisco">*</span></label>
                        <div class="col-sm-11">
                            <input type="text" name="descricao" class="form-control" placeholder="descricao"
                                   data-bv-notempty="true"
                                   data-bv-notempty-message="Por favor informe a descrição do produto!"
                                   />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Preço Unid.:</label>
                        <div class="col-sm-2">
                            <input name="valor"  type="text" id="valor_prod"    class="form-control" placeholder="Ex: R$ 3,00" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Limite para estoque:</label>
                        <div class="col-sm-2">
                            <input name="qtde" type="text" id="qtde_minima" size="6"     class="form-control" placeholder="Ex: 10"  />
                        </div>
                    </div>
                </div>
        </div>
        <footer class=" col-md-12 col-md-offset-3" >
            <!-- Footer Links -->
            <div class=" col-md-12 col-md-offset-3">
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">
                        <div class="form-group">
                            <div class="col-sm-12" style="padding-right:20px;">
                                <button type="submit" class="btn btn-primary">Confirmar</button>
                            </div>
                        </div>
                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                </div>

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2021 Copyright:
                <a href="https://ssat.com.br/"> Ivan Amado</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->

        </form>
    </div>
</div>
</div>