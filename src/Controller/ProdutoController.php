<?php

namespace crud1\Controller;

//use Model\ProdutoModel;
//use Repository\ProdutoRepository;
class ProdutoController extends Controller {

    public function index() {
        //$data['mahasiswa'] = $this->model('Home')->getAll();
        $data['title'] = "Halaman home";
        $this->view("templates/header", $data);
        $this->view("produto/index", $data);
        $this->view("templates/footer");
    }

    public function addProdutoAction($produtoPost) {

        $produto = new crud1\Controller\ProdutoController();
        $produto->setDescricao($produtoPost['descricao']);
        $produto->setValor($produtoPost['valor']);

        $result = $produto->insert($produto);
        if ($result) {

            $msg = 'CADASTRADO COM SUCESSO!!!';
        } else {
            $msg = 'ERRO AO CADASTRAR PRODUTOS';
        }

        return $msg;
    }

    public function removerProdutoAction() {
        
    }

    public function listarProdutoAction() {
        
    }

    public function findProductoAction() {
        
    }

}
?>

