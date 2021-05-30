
<?php
namespace Model/ProdutoModel;


class ProdutoModel{

   private $id
   private $descricao;
   private $valor;
   
    public function getId(){ 
		return $this->id;
	}
	public function setId($id){
		$this->id=id;
	}
  
 }
 
  public function  getDescricao(){
	  return $this->descricao;
  }
  public function setDescricao($descricao){
	  
	$this->descricao=$descricao;  
	  
  }
  public function getValor(){
	  
  return $this->valor;
  
  }
  ?>