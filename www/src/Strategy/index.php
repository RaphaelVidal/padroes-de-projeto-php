<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use RaphaelVidal\DesignPatterns\Strategy\Pedidos\Pedido;
use RaphaelVidal\DesignPatterns\Strategy\Envios\EnvioCorreios;
use RaphaelVidal\DesignPatterns\Strategy\Envios\EnvioRetiradaLoja;
use RaphaelVidal\DesignPatterns\Strategy\Envios\EnvioTransportadora;


// Função para mostrar as opções de envio e obter a escolha do usuário
function obterEscolhaEnvio() {
    echo "\n\n#### Escolha o tipo de envio: ###\n";
    echo "1. Correios\n";
    echo "2. Transportadora\n";
    echo "3. Retirada na Loja\n\n";
    echo "Digite o número da opção desejada: ";
    
    $escolha = trim(fgets(STDIN));
    return $escolha;
}

// Dados do pedido
$peso = 5; // peso do pedido em kg
$distancia = 50; // distância para entrega em km

// Cria um pedido
$pedido = new Pedido($peso, $distancia);

// Obtém a escolha do usuário
$escolha = obterEscolhaEnvio();

// Aplica a estratégia de envio com base na escolha do usuário
switch ($escolha) {
    case 1:
        $pedido->setEnvioStrategy(new EnvioCorreios());
        break;
    case 2:
        $pedido->setEnvioStrategy(new EnvioTransportadora());
        break;
    case 3:
        $pedido->setEnvioStrategy(new EnvioRetiradaLoja());
        break;
    default:
        echo "Escolha inválida.\n";
        exit();
}

// Calcula e exibe o custo e tempo de entrega
echo "\nCusto de envio: R$" . $pedido->calcularCustoEnvio() . "\n";
echo "Tempo de entrega: " . $pedido->calcularTempoEntrega() . " dias\n\n";

?>