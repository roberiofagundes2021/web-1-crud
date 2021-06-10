
<?php
require_once 'CrudProduto.php';
 class Produtos extends CrudProdutos {
    
    protected $tabela = 'produto';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($idproduto) {
        $sql = "SELECT * FROM $this->tabela WHERE idproduto = :idproduto";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idproduto', $idproduto, PDO::PARAM_INT);
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
        $sql = "INSERT INTO $this->tabela(idproduto,nomedoproduto,idmarca,idcategoria,datavencimento) VALUES (:idproduto,:nomedoproduto,:idmarca,:idcategoria,:datavencimento)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idproduto', $this->idproduto);
        $stm->bindParam(':nomedoproduto', $this->nomedoproduto);
        $stm->bindParam(':idmarca', $this->idmarca);
        $stm->bindParam(':idcategoria', $this->idcategoria);
        $stm->bindParam(':datavencimento', $this->datavencimento);
        return $stm->execute();
    }
    
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
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