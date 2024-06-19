<?php 

require_once __DIR__ . '/../../vendor/autoload.php';

use RaphaelVidal\DesignPatterns\Facade\Interfaces\PedidoFacade;

// Cria uma instância do Facade
$pedidoFacade = new PedidoFacade();

echo "\n\n #### FACADE: ### \n\n";
// Realiza um pedido
$idProduto = 123;
$quantia = 99.99;
$pedidoFacade->realizarPedido($idProduto, $quantia);

echo "\n\n #### FIM FACADE: ### \n\n";