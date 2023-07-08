<?php
class conexaoBanco
{
    public $conexao;
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'detroybus';

    public function __construct()
    {
        $this->conexao = mysqli_connect($this->server, $this->username, $this->password, $this->database);
        if ($this->conexao->error) {
            echo 'error de conexão';
        } else {
            echo "conexão feita com sucesso";
        }
    }
}


