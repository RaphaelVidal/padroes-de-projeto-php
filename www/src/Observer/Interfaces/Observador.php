<?php

namespace RaphaelVidal\DesignPatterns\Observer\Interfaces;

/*
    Interface do Observador
    Define o método statusUpdate, que é chamado para atualizar os observadores
    quando o estado do sujeito muda.
*/
interface Observador {
    public function statusUpdate($pedido);
}
?>