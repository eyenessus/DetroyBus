<?php

interface IPagamento{
    public function pix();
    public function boleto();
    public function registrarPagamento();
}
?>