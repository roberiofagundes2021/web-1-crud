<?php
	include "DB.php"; 

abstract class CrudClientes extends DB
{
		protected $tabela;
		public $idcliente;
		public $nomecliente;
		public $cpfcliente;
		public $rgcliente;
		public $sexocliente;
		public $datanascimento;
		
		

	public function setIdCliente($idcliente){
		$this->idcliente = $idcliente;
	}

	public function getIdCliente(){
		return $this->idcliente;
	} 


	public function setNome($nomecliente){
		$this->nomecliente=$nomecliente;
	}

	public function getNome(){
		return $this->nomecliente; 
	}

	public function setCpfCliente($cpfcliente){
		$this->cpfcliente=$cpfcliente;
	}

	public function getCpfCliente(){
		return $this->cpfcliente;
	}


	public function setRgCliente($rgcliente){
		$this->rgcliente=$rgcliente;
	}

	public function getRgCliente(){
		return $this->rgcliente;
	}

	public function setSexoCliente($sexocliente){
		$this->sexocliente=$sexocliente;
	}

	public function getSexoCliente(){
		return $this->sexocliente;
	}
	
	public function setDataNascimento($datanascimento){
		$this->datanascimento=$datanascimento;
	}

	public function getDataNascimento(){
		return $this->datanascimento;
	}

}

?>