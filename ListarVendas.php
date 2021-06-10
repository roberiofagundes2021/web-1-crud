<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Venda.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Lista de venda </title>
</head>

<body>
   
    <!-- Inicio da tabela -->
    <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>idVenda</th>
                        <th>idusuario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $venda=New Vendas;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $idvenda = $_POST['idvenda'];
                        
                        $venda->delete($idvenda);
                    }
                                                         
                    
                    

                    foreach ($venda->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->idvenda;?> </td>

                        <td> <?php echo $value->idusuario;?> </td>

                        <td>

                        <form method="post" action="AlterarAluno.php">
                                <input name="idvenda" type="hidden" value="<?php echo $value->idvenda;?>"/>                  
                                <input name="idusuario" type="hidden" value="<?php echo $value->nome;?>"/>

                                <button name="alterar" type="submit">Alterar</button>
                         </form>
<td>
                            <form method="post" >
                                <input name="idvenda" type="hidden" value="<?php echo $value->idvenda;?>"/>
                                <button name="excluir" type="submit">Excluir</button>
                            </form>
                        </td>

                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
            <!-- Fim da tabela -->




    </form>

</body>
</html>
