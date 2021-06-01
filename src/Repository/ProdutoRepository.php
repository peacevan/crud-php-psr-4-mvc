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

    function update($produto) {
        $update = $conn->prepare('UPDATE produtos set :descricao_prod = :descricao_prod, valor = :valor,cod_ean:cod_ean where id = ?;');
        $update->bindParam(':descricao_prod', $produto->getDescricao, PDO::PARAM_STR);
        $update->bindParam(':valor', $produto->getValor(), PDO::PARAM_STR);
        $update->bindParam(':cod_ean', $produto->codEan(), PDO::PARAM_INT);
        $update->execute();
        $update->closeCursor();
        $conn = null;
    }

    /**
     * Função para remover produtos
     * @access public 
     * @param codigoProduto
     * @return lista de produtos
     */
    function remove($produto) {
        if (isset($conn)) {
            $result['error'] = false;
            $result['success'] = true;
            try {
                $update = $conn->prepare('delete from produto where id = :id;');
                $update->bindParam(':id', $produto->getId(), PDO::PARAM_INT);
                $update->execute();
                $update->closeCursor();
                $result['success'] = true;
                $conn = null;
            } catch (PDOException $e) {
                $result['error'] = $e->getMessage();
                $result['success'] = false;
            }
        }
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
//            $read = $conn->prepare('SELECT * FROM produtos');
//            $exec=$read->execute();
//            $result = $read->fetch(PDO::FETCH_OBJ);
            // $sql = "SELECT * FROM produtos";
            // $result = $conn->query($sql);
            // $rows = $result->fetchAll();
            // return $rows;
            // prepare statement for execution
            $q = $conn->prepare('SELECT * FROM produtos');
            // pass values to the query and execute it
            $q->execute();
            $results = $q->fetchAll(PDO::FETCH_ASSOC);
            $json = json_encode($results);
             return  $json;
            
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