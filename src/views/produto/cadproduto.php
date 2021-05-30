<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="post" id="formLogin" class="form-horizontal" role="form"
                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
                >
                <div  class="form-cadastro">
                    <h4><i class="glyphicon glyphicon-user"></i> Novo Cadastro <span class="observacao-usuarios">*Campos obrigatórios</span></h4>
                    <hr>
                   
                    <p>Preencha corretamente os campos abaixo para efetuar seu cadastro:</p>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Descricao<span class="asterisco">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nome" class="form-control" placeholder="Nome"
                                   data-bv-notempty="true"
                                   data-bv-notempty-message="Por favor informe o nome!"

                                />
                        </div>
                    </div>
                  
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">valor</label>
                        <div class="col-sm-5">
                            <input type="text" name="celular" class="form-control" placeholder="Celular"
                                   data-bv-notempty="true"
                                   data-bv-notempty-message="Por favor informe o celular!"/>
                        </div>
                    </div>
                                       
                    <div class="form-group">
                        <div class="col-sm-12" style="padding-right:20px;">
                            <button type="submit" class="btn btn-principal">Confirmar</button>
                            <a class="btn btn-default" href="#">Restaurar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>