<?php

namespace RaphaelVidal\DesignPatterns\Facade\Interfaces;

use RaphaelVidal\DesignPatterns\Facade\Pedidos\Envio;
use RaphaelVidal\DesignPatterns\Facade\Pedidos\Estoque;
use RaphaelVidal\DesignPatterns\Facade\Pedidos\Pagamento;

class PedidoFacade {
    private Estoque $estoque;
    private Pagamento $pagamento;
    private Envio $envio;

    public function __construct() {
        $this->estoque = new Estoque();
        $this->pagamento = new Pagamento();
        $this->envio = new Envio();
    }


    /**
     * Realiza um pedido de compra.
     *
     * @param int $idProduto O ID do produto.
     * @param float $valor O valor do produto.
     * @return bool Retorna true se o pedido de compra for bem-sucedido, false caso contrário.
     */
    public function realizarPedido(int $idProduto, float $valor): bool
    {
        if ($this->estoque->verificarEstoque($idProduto)) {
            if ($this->pagamento->processarPagamento($valor)) {
                if ($this->envio->arranjarEnvio($idProduto)) {
                    echo "Pedido realizado com sucesso.\n";
                    return true;
                }
            }
        }
        echo "Falha ao realizar o pedido.\n";
        return false;
    }
}
?>
