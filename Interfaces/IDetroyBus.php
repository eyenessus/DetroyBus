<?php

interface IDetroyBus{
    public function criar(array $objeto):bool;
    public function obter(): stdClass;
    public function apagar():bool;
    public function atualizar():bool;
}
?>