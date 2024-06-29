<?php

namespace RaphaelVidal\DesignPatterns\Strategy\Pedidos;

use RaphaelVidal\DesignPatterns\Strategy\Interfaces\EnvioStrategy;


class Pedido {
    private EnvioStrategy $envioStrategy;
    private float $peso;
    private float $distancia;

    /**
     * @param float $peso
     * @param float $distancia
     * @return void
     */
    public function __construct(float $peso, float $distancia)
    {
        $this->peso = $peso;
        $this->distancia = $distancia;
    }

    public function setEnvioStrategy(EnvioStrategy $strategy) {
        $this->envioStrategy = $strategy;
    }

    public function calcularCustoEnvio() {
        return $this->envioStrategy->calcularCusto($this->peso);
    }

    public function calcularTempoEntrega() {
        return $this->envioStrategy->calcularTempoEntrega($this->distancia);
    }
}
