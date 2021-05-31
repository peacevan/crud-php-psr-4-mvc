<?php

namespace app\Controller;

use app\Model\ProdutoModel;
use app\Repository\ProdutoRepository;
use app\Util\Util;

class ProdutoController extends Controller {

    /**
     * @var string
     */
    protected $modelProduto = "ProdutoModel";

    public function index() {
        //$data['mahasiswa'] = $this->model('Home')->getAll();
        $data['title'] = 'Produto';
        //$data= json_encode($data);
        // passar $data para json
        return $this->render('index', $data, true);
    }

    public function cadastrar($produtoPost = null) {

        $msg = '';
        if (count($_POST)) {

            /*
            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            $subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING);
            $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);
           */
            //$util::dd($_POST);
            $produtoController = $this->getController('ProdutoController');
            $produtoModel = $produtoController->Model($this->modelProduto);
            $produtoModel->setDescricao($_POST['descricao']);
            $produtoModel->setValor($_POST['valor']);
            $produtoModel->setQtde($_POST['qtde']);
            $produtoModel->setCodProduto($_POST['codProduto']);
            //$produtoModel->setCodean();

            $result = $produtoController->getRepository('produtoRepository')
                    ->save($produtoModel);

            if ($result) {
                $msg = 'CADASTRADO COM SUCESSO!!!';
            } else {
                $msg = 'ERRO AO CADASTRAR PRODUTOS';
            }
            return $msg;
        }
        $data['title'] = 'Produto';
        $data['redirect'] = 'produto/cadastrar';
        $data['msg'] = $msg;
        return $this->render('cadastrar', $data, true);
    }

    public function removerProdutoAction() {
        
    }

    public function listarProdutoAction() {
        
    }

    public function findProductoAction() {
        
    }

}
?>

