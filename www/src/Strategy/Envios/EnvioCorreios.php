<?php

namespace RaphaelVidal\DesignPatterns\Strategy\Envios;

use RaphaelVidal\DesignPatterns\Strategy\Interfaces\EnvioStrategy;


class EnvioCorreios implements EnvioStrategy {
    public function calcularCusto(float $peso) {
        return 10 + 0.5 * $peso; // Exemplo de cálculo: taxa fixa + taxa por peso
    }

    public function calcularTempoEntrega(float $distancia) {
        return 2 + 0.1 * $distancia; // Exemplo de cálculo: dias fixos + dias por distância
    }
}
