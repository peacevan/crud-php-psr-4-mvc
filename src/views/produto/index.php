<div class="container mt-5">
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
                <td><button @click="showingeditModal = true; selectProduto(produto);" class="btn btn-warning">Edit</button></td>
                <td><button @click="showingdeleteModal = true; selectProduto(produto);" class="btn btn-danger">Delete</button></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- add modal -->
<div class="modal col-md-6" id="addmodal" v-if="showingaddModal">
    <div class="modal-head">
        <p class="p-left p-2">Add user</p>
        <hr/>

        <div class="modal-body">
            <div class="col-md-12">
                <label for="uname">Produtoname</label>
                <input type="text" id="uname" class="form-control" v-model="clickedProduto.cod_ean">

                <label for="email">Email</label>
                <input type="text" id="email" class="form-control" v-model="clickedProduto.desc_prod">

                <label for="phn">Mobile</label>
                <input type="text" id="phn" class="form-control" v-model="clickedProduto.valor">
            </div>

            <hr/>
            <button type="button" class="btn btn-success"  @click="showingaddModal = false; addProduto();">Save changes</button>
            <button type="button" class="btn btn-danger"   @click="showingaddModal = false;">Close</button>
        </div>
    </div>
</div>


<!-- edit modal -->
<div class="modal col-md-6" id="editmodal" v-if="showingeditModal">
    <div class="modal-head">
        <p class="p-left p-2">Edit user</p>
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
            <button type="button" class="btn btn-success"  @click="showingeditModal = false; updateProduto();">Save changes</button>
            <button type="button" class="btn btn-danger"   @click="showingeditModal = false;">Close</button>
        </div>
    </div>
</div>


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
            <button type="button" class="btn btn-danger"  @click="showingdeleteModal = true; deleteProduto();">Yes</button>
            <button type="button" class="btn btn-warning"   @click="showingdeleteModal = false;">No</button>
        </div>
    </div>
</div>