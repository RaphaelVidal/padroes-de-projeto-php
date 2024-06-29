<?php
namespace RaphaelVidal\DesignPatterns\Strategy\Envios;

use RaphaelVidal\DesignPatterns\Strategy\Interfaces\EnvioStrategy;

class EnvioRetiradaLoja implements EnvioStrategy {
    public function calcularCusto(float $peso) {
        return 0; // Sem custo para retirada na loja
    }

    public function calcularTempoEntrega(float $distancia) {
        return 0; // Retirada imediata
    }
}
