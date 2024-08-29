<?php

namespace RaphaelVidal\DesignPatterns\Observer\Interfaces;

interface Sujeito {
    public function adicionarNovoObservador(Observador $observer);
    public function removerObservador(Observador $observer);
    public function notificarObservadoresMudancaStatus();
}
?>