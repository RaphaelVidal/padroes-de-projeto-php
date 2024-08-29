<?php

namespace RaphaelVidal\DesignPatterns\Observer\Observadores;

use RaphaelVidal\DesignPatterns\Observer\Interfaces\Observador;

class RelatorioGerador implements Observador {
    public function statusUpdate($pedido) {
        // Gera um relatório com o novo status do pedido
        echo "Relatório: O pedido " . $pedido->getId() . " agora está com status: " . $pedido->getStatus() . ".\n";
    }
}