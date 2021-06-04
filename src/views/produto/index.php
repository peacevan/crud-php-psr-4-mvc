<div class="container mt-5">
    <div class="alert alert-danger col-md-6" id="alertMessage" role="alert" v-if="errorMessage">
        {{ errorMessage }}
    </div>

    <div class="alert alert-success col-md-6" id="alertMessage" role="alert" v-if="successMessage">
        {{ successMessage }}
    </div>
    <table class="table table-bordered table-striped" >
        <thead class="thead-dark">
            <tr>
                <th>codigo</th>
                <th>descrição</th>
                <th>preço</th>
                <th>editar</th>
                <th>remover</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="produto in produtos">
                <td>{{produto.cod_ean}}</td>
                <td>{{produto.descricao_prod}}</td>
                <td>{{produto.valor}}</td>
                <!--<td>{{user.mobile}}</td>-->
                <td><button @click="showingeditModal = true;  selectProduto(produto);" class="btn btn-warning">Edit</button></td>
                <td><button @click="showingdeleteModal = true;selectProduto(produto);" class="btn btn-danger">Delete</button></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- add modal -->
<<<<<<< HEAD


<div class="modal" tabindex="-1" role="dialog" id="addmodal" v-if="showingaddModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="showingaddModal = false;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <label for="uname">codigo</label>
                    <input type="text" id="uname" class="form-control" v-model="clickedProduto.cod_ean">

                    <label for="email">descrição</label>
                    <input type="text" id="email" class="form-control" v-model="clickedProduto.descricao_prod">

                    <label for="phn">valor</label>
                    <input type="text" id="phn" class="form-control" v-model="clickedProduto.valor">
                </div>
                <hr/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"  @click="showingaddModal = false; addProduto();">Salva</button>
                <button type="button" class="btn btn-danger"   @click="showingaddModal = false;">Fecha</button>
            </div>

=======
<div class="modal col-md-6" id="addmodal" v-if="showingaddModal">
    <div class="modal-head">
        <p class="p-left p-2">Adicionar produto</p>
        <hr/>

        <div class="modal-body">
            <div class="col-md-12">
                <label for="uname">codigo</label>
                <input type="text" id="uname" class="form-control" v-model="clickedProduto.cod_ean">

                <label for="email">descrição</label>
                <input type="text" id="email" class="form-control" v-model="clickedProduto.descricao_prod">

                <label for="phn">valor</label>
                <input type="text" id="phn" class="form-control" v-model="clickedProduto.valor">
            </div>

            <hr/>
            <button type="button" class="btn btn-success"  @click="showingaddModal = false; addProduto();">Salva</button>
            <button type="button" class="btn btn-danger"   @click="showingaddModal = false;">Fecha</button>
>>>>>>> 0dd79aebf18de86aa74a97ab1dfc71c4dc639d50
        </div>
    </div>
</div>


<<<<<<< HEAD
=======
<!-- edit modal -->
<div class="modal col-md-6" id="editmodal" v-if="showingeditModal">
    <div class="modal-head">
        <p class="p-left p-2">Editar Produto</p>
        <hr/>
>>>>>>> 0dd79aebf18de86aa74a97ab1dfc71c4dc639d50





<div class="modal" tabindex="-1" role="dialog" id="editModal" v-if="showingeditModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="showingeditModal = false;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <label for="uname">codigo</label>
                    <input type="text" id="uname" class="form-control" v-model="clickedProduto.cod_ean">

                    <label for="email">descrição</label>
                    <input type="text" id="email" class="form-control" v-model="clickedProduto.descricao_prod">

                    <label for="phn">valor</label>
                    <input type="text" id="phn" class="form-control" v-model="clickedProduto.valor">
                </div>

                <hr/>


            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-success"  @click="showingeditModal = false; updateProduto();">Save changes</button>
                <button type="button" class="btn btn-danger"   @click="showingeditModal = false;">Close</button>
            </div>

        </div>
    </div>
</div>


<<<<<<< HEAD
<div class="modal" tabindex="-1" role="dialog" id="deletemodal" v-if="showingdeleteModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Remover Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="showingdeleteModal = false;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <center>
                        <p>Deseja remover esse item?</p>
                        <h3>{{clickedProduto.descricao_prod}}</h3>
                    </center>
                    <hr/>



                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"  @click="showingdeleteModal = false; deleteProduto();">Sim</button>
                <button type="button" class="btn btn-warning"   @click="showingdeleteModal = false;">Não</button>
            </div>
=======
<!-- delete data -->
<div class="modal col-md-6" id="deletemodal" v-if="showingdeleteModal">
    <div class="modal-head">
        <p class="p-left p-2">Delete user</p>
        <hr/>

        <div class="modal-body">
            <center>
                <p>Are you sure you want to delete?</p>
                <h3>{{clickedProduto.descricao_prod}}</h3>
            </center>
            <hr/>
            <button type="button" class="btn btn-danger"  @click="showingdeleteModal = false; deleteProduto();">Sim</button>
            <button type="button" class="btn btn-warning"   @click="showingdeleteModal = false;">Não</button>
>>>>>>> 0dd79aebf18de86aa74a97ab1dfc71c4dc639d50
        </div>
    </div>
</div>



