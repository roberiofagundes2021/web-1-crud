
<?php
require_once 'CrudItensVendas.php';
 
 class ItensVendas extends CrudItensVendas {
    
    protected $tabela = 'itens_vendas';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idvenda) {
        $sql = "SELECT * FROM $this->tabela WHERE iditensvendas = :iditensvenda";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iditensvenda', $iditensvenda, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
    

     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela(iditensvendas,idvenda,idproduto,quantidade,valorvenda,desconto) VALUES (:iditensvendas,:idvenda,:idproduto,:quantidade,:valorvenda,:desconto)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iditensvendas', $this->iditensvendas);
        $stm->bindParam(':idvenda', $this->idvenda);
        $stm->bindParam(':idproduto', $this->idproduto);
        $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':valorvenda', $this->valorvenda);
        $stm->bindParam(':desconto', $this->desconto);
        return $stm->execute();
    }
    
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':iditensvenda', $iditensvenda, PDO::PARAM_INT);
        $stm->bindParam(':idcliente', $this->idcliente);
        $stm->bindParam(':datavenda', $this->datavenda);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE idvenda = :idvenda";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}

?>