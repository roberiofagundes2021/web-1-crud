<?php
	include "DB.php"; 

abstract class CrudVendas extends DB
{
		protected $tabela;
		public $idvenda;
		public $idcliente;
		public $datavenda;
		
		

	public function setIdVenda($idvenda){
		$this->idvenda = $idvenda;
	}

	public function getIdVenda(){
		return $this->idvenda;
	} 


	public function setIdCliente($idcliente){
		$this->idcliente=$idcliente;
	}

	public function getIdCliente(){
		return $this->idcliente; 
	}

	

	public function setDataVenda($datavenda){
		$this->datavenda=$datavenda;
	}

	public function getDataVenda(){
		return $this->datavenda;
	}

	

}








?>