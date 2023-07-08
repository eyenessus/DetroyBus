<?php
include_once('../../Interfaces/IDetroyBus.php');
class CrudDetroyBus
{
    protected $servico;
    public function __construct(IDetroyBus $servico){
        $this->servico = $servico;
    }
    public function criar(array $dados): bool
    {
        $email = $dados['email'];
        $dados['senha'] = htmlspecialchars(($dados['senha']));
        if(!filter_var($email,FILTER_SANITIZE_EMAIL)){
            return false;
        }
       return $this->servico->criar((array)$dados);
    }

    public function obter(): stdClass
    {
        return $this->servico->obter();
    }

    public function apagar(): bool
    {
        return $this->servico->apagar();
    }

    public function atualizar(): bool
    {
        return $this->servico->atualizar();
    }

}
