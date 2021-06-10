<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Venda.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cadastrar vendas</title>
</head>
<body>
	<h2>cadastro de vendas</h2>

	<fieldset>
   
  
    <form method='post' action="">

       <label for='idvenda'> idvenda:</label><br><br>
        <input type="text" name="idvenda"/><br><br>

    <label for='idcliente'> idcliente:</label><br><br>
    	<input type="text" name="idcliente"/><br><br>

    <label for='datavenda'> datavenda: </label>    
    	<input type="text" name="datavenda"/><br><br>

    	 <input type="submit" value="cadastrar" name="cadastrar"/>
        
    </form>
	</fieldset>

		<?php
    
      $CrudVendas = new Vendas;
      if(isset($_POST['cadastrar'])):
            
            $idcliente = $_POST['idcliente'];
            $datavenda = $_POST['datavenda'];
            $idvenda = $_POST['idvenda'];
           
    
            $CrudVendas->setIdCliente($idcliente);
            $CrudVendas->setDataVenda($datavenda);
            $CrudVendas->setIdVenda($idvenda);
            

            if($CrudVendas->insert()){
                echo "vendas ". $idcliente. " inserido com sucesso";
            }
      endif;
    ?>

</body>
</html>

