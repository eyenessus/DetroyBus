<?php
class Passagem implements InterfacePassagemCrud{
    protected $banco;
    public function __construct(ConexaoMysql $banco){
          $this->banco = $banco;
    }
    public function criarPassagem(){

    }
    public function verPassagem(){

    }
    public function excluirPassagem(){

    }
    public function editarPassagem(){

    }
}

?>