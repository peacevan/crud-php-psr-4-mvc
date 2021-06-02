<?php

namespace app\Repository;

use app\Connection\Connection;
use PDO;
use PDOException;

class ProdutoRepository {

    function save($produto) {

        $conn = new Connection();
        $conn = $conn->getConn();
        $result = false;
        if (isset($conn)) {
            try {
                $conn->beginTransaction();
                $insert = $conn->prepare("INSERT INTO produtos (descricao_prod,valor,cod_ean) VALUES (:descricao, :valor,:cod_ean)");

                $codProduto = $produto->getCodProduto();
                $valor = $produto->getValor();
                $descricao = $produto->getDescricao();

                $insert->bindParam(':descricao', $descricao);
                $insert->bindParam(':valor', $valor);
                $insert->bindParam(':cod_ean', $codProduto);
                $insert->execute();
                $insert->closeCursor();
                $result['commit'] = $conn->commit();
                $conn = null;
            } catch (PDOException $e) {
                $conn->rollBack();
                $relsut['erro'] = true;
                $result['msgErro'] = $e->getMessage();
            }
        }
        return $result;
    }

    /**
     * Função editar produto
     * @access public 
     * @param codigoProduto
     * @return lista de produtos
     */
    function edit($produto) {
        try {
            $conn = new Connection();
            $conn = $conn->getConn();
            $result = false;
            $conn->beginTransaction();
            $codProduto = $produto->getCodProduto();
            $valor = $produto->getValor();
            $descricao = $produto->getDescricao();
            $update = $conn->prepare('UPDATE produtos set descricao_prod = :descricao_prod, valor = :valor,cod_ean = :cod_ean where cod_ean = :id;');
            $update->bindParam(':descricao_prod', $descricao);
            $update->bindParam(':valor', $valor);
            $update->bindParam(':cod_ean', $codProduto);
            $update->bindParam(':id', $codProduto);
            $update->execute();
            $update->closeCursor();
            $conn = null;
        } catch (PDOException $e) {
            $conn->rollBack();
            $relsut['erro'] = true;
            $result['msgErro'] = $e->getMessage();
            die($result['msgErro']);
        }
        return $result;
    }

    /**
     * Função para remover produtos
     * @access public 
     * @param codigoProduto
     * @return lista de produtos
     */
    function remove($id) {
        
        $conn = new Connection();
        $conn = $conn->getConn();
        $result = false;
        if (isset($conn)) {
            $result['error'] = false;
            $result['success'] = true;
            
            try {
                $update = $conn->prepare('delete from produtos where id_prod = :id;');
                $update->bindParam(':id', $id, PDO::PARAM_INT);
                $update->execute();
                $update->closeCursor();
                $result['success'] = true;
                $conn = null;
            } catch (PDOException $e) {
                $result['error'] = $e->getMessage();
                $result['success'] = false;
                die($e->getMessage());
            }
        }
         var_dump($result);
        return $result;
    }

    /**
     * Função para buscar produtos
     * @access public 
     * @param nenhum
     * @param nenhum 
     * @return lista de produtos
     */
    function findAll() {
        $conn = new Connection();
        $conn = $conn->getConn();
        $result = false;
        if (isset($conn)) {
            $result = false;
            $q = $conn->prepare('SELECT * FROM produtos');
            // pass values to the query and execute it
            $q->execute();
            $results = $q->fetchAll(PDO::FETCH_ASSOC);
            $json = json_encode($results);
            return $json;
        } else {
            return false;
        }
    }

    /**
     * Função para  buncar um produto pelo id
     * @access public 
     * @param codigoProduto
     * @return produto
     */
    function findByid($id) {
        $read = $conn->prepare('SELECT * FROM produto where cod_produto:cod_produto');
        $read->bindParam('cod_produto', $id, PDO::PARAM_INT);
        $read->execute();
        //passar um array pra json
        $produtoList = json_econde($read);
        return $produtoList;
    }

}

?>