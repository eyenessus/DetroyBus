<?php
include('InterfaceClienteCrud.php');
include('ConexaoMysql.php');
class Cliente implements InterfaceClienteCrud{
     protected $banco;
    public function __construct(){
      $this->banco = new ConexaoMysql();
    }

    public function criarCliente()
    {
        // TODO: Implement criarCliente() method.
    }

    public function verDadosCliente()
    {
        // TODO: Implement verDadosCliente() method.
    }

    public function excluirCliente(int $id =null):bool
    {
       $resposta = $this->banco->conexao->prepare("DELETE FROM clientes WHERE id=?");
       $resposta->bind_param('s',$id);
       $resposta->execute();
        if($resposta->affected_rows == 1){
            echo "Cliente excluido com sucesso";
            $this->banco->conexao->close();
            return true;
        }else{
            echo "Erro ao excluir o cliente";
            $this->banco->conexao->close();
            return false;
        }
       
    }

    public function editarEditar()
    {
        // TODO: Implement editarEditar() method.
    }
}
