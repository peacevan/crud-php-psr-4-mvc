

<?php 


namespace crud1\Repository;


use Model\ProdutoModel;
use Conection\Conn;
class ProdutoRepository{
  
   function insert($produto){
	   
	$conn = new Conection\Conn();
  if (isset($conn)) {
   
    $insert = $conn->prepare("INSERT INTO produto (descricao,valor) VALUES (:descricao, :valor)");
    $insert->bindParam(':descricao',$produto->getDescricao());
    $insert->bindParam(':valor', $produto->getValor());

    $insert->execute();
    
    $insert->closeCursor();
    
    $conn = null;
	   
  
  }
  
  function update($produto){
	  
	  
	$update = $conn->prepare('UPDATE produto set :descricao = :descricao, valor = :valor where id = ?;');
    
    $update->bindParam(':descricao', $produto->getDescricao,PDO::PARAM_STR);
    $update->bindParam(':valor', $produto->getValor(),PDO::PARAM_STR);
    $update->bindParam(':id', $produto->getId,PDO::PARAM_INT);
    
   
    
    $update->execute();
    $update->closeCursor();
    
    $conn = null;
  
  }
  
  funnction remove($produto){
    if (isset($conn)) {
		
	$result['error']=false;	
	$result['success']=false;
    try {
    
    $update = $conn->prepare('delete from produto where id = :id;');
    
    $update->bindParam(':id',$produto->getId(), PDO::PARAM_INT);
      
    $update->execute();
    $update->closeCursor();
	$result['success']=true;
    $conn = null;
	} catch(PDOException $e){
		 $result['error']= $e->getMessage();
	
	}
  }
 }
  
  
  //refatorar depois
  function  findAll(){
	  
	 $read = $conn->prepare('SELECT * FROM produto');
   
    $read->bindParam(1, $id, PDO::PARAM_INT);
    $read->execute();  
	  
    //passar um array pra json
	$produtoList= json_econde($read);
	return $produtoList;
  }
  function findByid($id){
	  
	  
  }
  
  
 }
  ?>