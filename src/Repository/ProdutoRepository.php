<?php

namespace app\Repository;

use app\Connection\Connection;
use app\Util\Util;
use PDO;
use PDOException;

class ProdutoRepository {

    function save($produto) {
       
        $conn = new Connection();
        $conn= $conn->getConn();
         $result=false;
        if (isset($conn)) {
           try{
            $conn->beginTransaction();
            $insert = $conn->prepare("INSERT INTO produtos (descricao_prod,valor,cod_ean) VALUES (:descricao, :valor,:cod_ean)");
           
            $codProduto = $produto->getCodProduto();
            $valor      = $produto->getValor();
            $descricao  = $produto->getDescricao();
         
            $insert->bindParam(':descricao', $descricao);
            $insert->bindParam(':valor', $valor);
            $insert->bindParam(':cod_ean', $codProduto);
            $insert->execute();
            $insert->closeCursor();
            $result['commit']= $conn->commit();
            $conn = null;
           } catch (PDOException $e){
              $conn->rollBack(); 
              $relsut['erro']=true;
              $result['msgErro']= $e->getMessage();
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
    //refatorar depois
    function findAll() {
        $read = $conn->prepare('SELECT * FROM produto');
        //$read->bindParam(1, $id, PDO::PARAM_INT);
        $read->execute();
        //passar um array pra json
        $produtoList = json_econde($read);
        return $produtoList;
    }

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