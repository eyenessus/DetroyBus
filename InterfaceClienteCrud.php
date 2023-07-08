<?php

interface InterfaceClienteCrud{
    public function criarCliente();
    public function verDadosCliente();
    public function excluirCliente(int $id) : bool;
    public function editarEditar();

}
?>