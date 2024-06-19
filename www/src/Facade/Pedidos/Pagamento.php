<?php

namespace RaphaelVidal\DesignPatterns\Facade\Pedidos;

class Pagamento {

    /**
     * Processa o pagamento de uma determinada quantidade.
     *
     * @param float $quantia A quantidade do pagamento a ser processada.
     * @return bool Retorna true se o pagamento for processado com sucesso, false caso contrário.
     */
    public function processarPagamento(float $valor): bool
    {
        // Lógica para processar pagamento
        echo "Processando pagamento de R$$valor.\n";
        return true;
    }
}


?>
