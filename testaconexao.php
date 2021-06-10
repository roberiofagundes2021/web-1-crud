<?php

	define('HOST','localhost');
	define('USER','postgres');
	define('PASSWORD','123456');
	define('BASE','John2');

	try {

		$con = new pdo('pgsql:host=' . HOST . ';dbname=' . BASE, USER, PASSWORD);
  		echo "conexao ok";
		
	} catch (PDFException $e) {

		echo "erro gerado" . $e->getMessage();
		
	}


?>