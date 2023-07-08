<?php
include_once('../../BancoMYSQL/ConexaoMysql.php');
class Cliente implements IDetroyBus
{
    private $bancoDeDados;
    public function __construct()
    {
        $this->bancoDeDados = new ConexaoMysql();
    }
    public function criar(array $objeto): bool
    {
        $colunas = implode(',',array_keys($objeto));
        $valores = implode("','",array_values($objeto));
        $query = "INSERT INTO clientes ($colunas) VALUES ('$valores')";
        $this->bancoDeDados->conexao->query($query);
        return true;
    }

    public function obter(): stdClass
    {
        return new stdClass;
    }

    public function apagar(): bool
    {
        $id =1;
        $resposta = $this->bancoDeDados->conexao->prepare("DELETE FROM clientes WHERE id=?");
        $resposta->bind_param('s', $id);
        $resposta->execute();
        if ($resposta->affected_rows == 1) {
            echo "Cliente excluido com sucesso";
            $this->bancoDeDados->conexao->close();
            return true;
        }

        if ($this->bancoDeDados->conexao->errno == 0) {
            echo 'cliente não existe';
        } else {
            echo "Erro ao excluir o cliente";
        }
        $this->bancoDeDados->conexao->close();
        return false;
    }

    public function atualizar(): bool
    {
        return true;
    }
}
