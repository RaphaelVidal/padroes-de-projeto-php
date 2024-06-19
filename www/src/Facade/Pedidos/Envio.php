<?php

namespace RaphaelVidal\DesignPatterns\Facade\Pedidos;

class Envio {
    
    /**
     * Arranja o envio para um produto específico.
     *
     * @param int $idProduto O ID do produto.
     * @return bool Retorna true se o envio foi arranjado com sucesso, false caso contrário.
     */
    public function arranjarEnvio(int $idProduto): bool
    {
        echo "Arranjando envio para o produto $idProduto.\n";
        return true;
    }
}
?>
