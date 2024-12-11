<?php
require 'ContaBancaria.php';

class ContaCorrente extends ContaBancaria
{
    private const TAXA_SAQUE = 0.005;
    private const TARIFA_MENSAL = 5_00;

    public function cobrarTarifaMensal(): void
    {
        $this->saldo -= self::TARIFA_MENSAL;
    }

    #[Override]
    public function sacar(int $valorASacar): void
    {
        if ($valorASacar > 0 && $valorASacar < $this->saldo) {
            $this->saldo -= $valorASacar -  ($valorASacar * self::TAXA_SAQUE);
        }
    }
}

// $conta = new ContaCorrente(0, 'João', TipoDeConta::ContaCorrente);
// $conta->depositar(1111);
// echo $conta->nomeDoTitular;
// echo $conta->saldo;
