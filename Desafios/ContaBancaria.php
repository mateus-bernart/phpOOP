<?php

require 'TipoDeContas.php';

class ContaBancaria
{
    public float $saldo = 0;

    public function __construct(
        float $saldo,
        public readonly string $nomeDoTitular,
        public readonly TipoDeConta $tipo
    ) {}

    /** 
     * Regras de negócio dentro do Modelo, 
     * sem métodos getter e setter para melhor legibilidade, 
     * manutenção e disposição das variáveis (publicas/privadas)
     */

    public function depositar(int $valorADepositar): void
    {
        if ($valorADepositar > 0) {
            $this->saldo += $valorADepositar;
        }
    }

    public function sacar(int $valorASacar): void
    {
        if ($valorASacar > 0 && $valorASacar < $this->saldo) {
            $this->saldo -= $valorASacar;
        }
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }
}
