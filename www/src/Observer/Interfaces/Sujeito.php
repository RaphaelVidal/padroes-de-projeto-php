<?php

namespace RaphaelVidal\DesignPatterns\Observer\Interfaces;

/*
    Interface do Sujeito (Sujeito que será Observado)
    Define métodos para anexar, desanexar e notificar observadores.
*/
interface Sujeito {
    public function adicionarNovoObservador(Observador $observer);
    public function removerObservador(Observador $observer);
    public function notificarObservadoresMudancaStatus();
}
?>