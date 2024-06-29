<?php

namespace RaphaelVidal\DesignPatterns\Strategy\Interfaces;


interface EnvioStrategy {
    public function calcularCusto(float $peso);
    public function calcularTempoEntrega(float $distancia);
}
