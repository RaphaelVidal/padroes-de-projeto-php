<?php

namespace RaphaelVidal\DesignPatterns\Facade\Pedidos;


class Estoque {
    
    /**
     * Verifica o estoque de um produto.
     *
     * @param int $idProduto O ID do produto.
     * @return bool Retorna true se o estoque estiver disponível, false caso contrário.
     */
    public function verificarEstoque(int $idProduto): bool 
    {
        echo "Verificando estoque do produto $idProduto.\n";
        return true;
    }
}

?>
