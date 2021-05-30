<?php

namespace src\Controller;

use src\Model\ProdutoModel;
use src\Repository\ProdutoRepository;

class ProdutoController extends Controller {
    /**
     * @var string
     */
    protected $modelProduto = "ProdutoModel";


    public function index() {
        //$data['mahasiswa'] = $this->model('Home')->getAll();
        $data['title'] = "Cadastro de Poduto";
        $this->view("templates/header", $data);
        $this->view("produto/index", $data);
        $this->view("templates/footer");
    }

    public function cadProduto($produtoPost) {
        $produto = new app\Controller\ProdutoController();
        $produto->setDescricao($produtoPost['descricao']);
        $produto->setValor($produtoPost['valor']);
        
        $produto =$this->Model($modelProduto);
        $produto->setDescricao($produtoPost['descricao']);
        $produto->setValor($produtoPost['valor']);
        
        
        
        
         if(count($_POST)) {
            $result = $produto->insert($produto);
            if ($result) {

                $msg = 'CADASTRADO COM SUCESSO!!!';
            } else {
                $msg = 'ERRO AO CADASTRAR PRODUTOS';
            }
            return $msg;
        }
        
         //$data['mahasiswa'] = $this->model('Home')->getAll();
        $data['title'] = "Cadastro de Poduto";
        $this->view("templates/header", $data);
        $this->view("produto/index", $data);
        $this->view("templates/footer");
        
    }

    public function removerProdutoAction() {
        
    }

    public function listarProdutoAction() {
        
    }

    public function findProductoAction() {
        
    }

}
?>

