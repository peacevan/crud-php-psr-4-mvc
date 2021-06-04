var app = new Vue({

    el: "#root",
    data: {
        showingaddModal: false,
        showingeditModal: false,
        showingdeleteModal: false,
        errorMessage: "",
        successMessage: "",
        produtos: [],
        newProduto: {cod_ean: "", descricao_prod: "", valor: ""},
        clickedProduto: {},
    },

    mounted: function () {
        console.log("Vue.js is running...1");
        this.getAllProdutos();
    },

    methods: {
        getAllProdutos: function () {
            axios.get('http://localhost/crud-poo/crud-psr4/public/Produto/listar?action=read')
                    .then(function (response) {
                        //console.log(response);

                        if (response.data.error) {
                            app.errorMessage = response.data.message;
                        } else {
                            app.produtos = response.data;
                        }
                    })
        },

        addProduto: function () {
            var formData = app.toFormData(app.clickedProduto);
            axios.post('http://localhost/crud-poo/crud-psr4/public/Produto/cadastrar?action=create', formData)
                    .then(function (response) {
                        console.log(response);
                        app.clickedProduto = {cod_ean: "", descricao_prod: "", valor: ""};

                        if (response.data.error) {
                            app.errorMessage = response.data.message;
                        } else {
                            app.successMessage = response.data.message;
                            app.getAllProdutos();
                        }
                    });
        },

        updateProduto: function () {
            var formData = app.toFormData(app.clickedProduto);
            axios.post('http://localhost/crud-poo/crud-psr4/public/Produto/editar?action=update', formData)
                    .then(function (response) {
                        console.log(response);
                        app.clickedProduto = {};

                        if (response.data.error) {
                            app.errorMessage = response.data.message;
                        } else {
                            app.successMessage = response.data.message;
                            app.getAllProdutos();
                        }
                    });
        },

        deleteProduto: function () {
            var formData = app.toFormData(app.clickedProduto);
            console.log(app.clickedProduto.id_prod);
            axios.post('http://localhost/crud-poo/crud-psr4/public/Produto/remover?action=delete',formData)
                    .then(function (response) {
                        app.clickedProduto = {};
                        console.log(response);
                        if (response.data.error) {
                            app.errorMessage = response.data.message;
                        } else {
                            app.successMessage = response.data.message;
                            app.getAllProdutos();
                        }
                    })
        },

        selectProduto(produto) {
            app.clickedProduto = produto;
        },

        toFormData: function (obj) {
            var form_data = new FormData();
            for (var key in obj) {
                form_data.append(key, obj[key]);
            }
            return form_data;
        },

        clearMessage: function (argument) {
            app.errorMessage = "";
            app.successMessage = "";
        },

    }
});