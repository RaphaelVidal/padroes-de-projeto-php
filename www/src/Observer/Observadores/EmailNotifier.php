<?php

namespace RaphaelVidal\DesignPatterns\Observer\Observadores;

use RaphaelVidal\DesignPatterns\Observer\Interfaces\Observador;

class EmailNotifier implements Observador {
    public function statusUpdate($pedido) {
        // Envia um e-mail notificando sobre a atualização do pedido
        echo "Notificação por e-mail: O status do pedido foi atualizado para " . $pedido->getStatus() . ".\n";
    }
}