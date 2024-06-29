<?php

namespace RaphaelVidal\DesignPatterns\Strategy\Envios;

use RaphaelVidal\DesignPatterns\Strategy\Interfaces\EnvioStrategy;

class EnvioTransportadora implements EnvioStrategy {
    public function calcularCusto(float $peso) {
        return 20 + 0.3 * $peso; // Exemplo de cálculo: taxa fixa maior + taxa menor por peso
    }

    public function calcularTempoEntrega(float $distancia) {
        return 1 + 0.2 * $distancia; // Exemplo de cálculo: dias fixos menores + dias maiores por distância
    }
}
