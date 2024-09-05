<?php

namespace RaphaelVidal\DesignPatterns\Observer\Observadores;

use RaphaelVidal\DesignPatterns\Observer\Interfaces\Observador;

/*
    Implementação concreta do Observador para email.
    Define o que o método statusUpdate deve fazer quando o estado do sujeito muda.
*/
class EmailNotifier implements Observador {
    public function statusUpdate($pedido) {
        // Envia um e-mail notificando sobre a atualização do pedido
        echo "Notificação por e-mail:
        Status do pedido atualizado para " . $pedido->getStatus() . ".\n";
    }
}