<?php

namespace RaphaelVidal\DesignPatterns\Observer\Sujeitos;

use RaphaelVidal\DesignPatterns\Observer\Interfaces\Sujeito;
use RaphaelVidal\DesignPatterns\Observer\Interfaces\Observador;

class Pedido implements Sujeito {
    private $id;
    private $status;
    private $observers = [];

    public function __construct($id) {
        $this->id = $id;
        $this->status = 'Novo';
    }

    public function getId() {
        return $this->id;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
        $this->notificarObservadoresMudancaStatus(); // Notifica todos os observadores sobre a mudança de status
    }

    public function adicionarNovoObservador(Observador $observer) {
        $this->observers[] = $observer;
    }

    public function removerObservador(Observador $observer) {
        $this->observers = array_filter($this->observers, function($obs) use ($observer) {
            return $obs !== $observer;
        });
    }

    public function notificarObservadoresMudancaStatus() {
        foreach ($this->observers as $observer) {
            $observer->statusUpdate($this);
        }
    }
}
?>
