<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use RaphaelVidal\DesignPatterns\Observer\Sujeitos\Pedido;
use RaphaelVidal\DesignPatterns\Observer\Observadores\EmailNotifier;
use RaphaelVidal\DesignPatterns\Observer\Observadores\RelatorioGerador;

/*
    Uso do Observer
    Um pedido é criado, e os observadores são anexados a ele.
    Quando o estado do pedido é atualizado, todos os observadores
    são notificados automaticamente.
*/

// Cria um pedido
$pedido = new Pedido(1);

// Cria observadores
$emailNotifier = new EmailNotifier();
$relatorioGerador = new RelatorioGerador();

// Anexa os observadores ao pedido
$pedido->adicionarNovoObservador($emailNotifier);
$pedido->adicionarNovoObservador($relatorioGerador);

// Atualiza novamente o status do pedido
echo "Atualizando o status do pedido para 'Enviado'...\n";
$pedido->setStatus('Enviado');

// Remove um observador e atualiza novamente
echo "Removendo o observador de relatório...\n";
$pedido->removerObservador($relatorioGerador);

echo "Atualizando o status do pedido para 'Concluído'...\n";
$pedido->setStatus('Concluído');
?>
