<?php

class Conta
{
    private int $saldoEmCentavos;
    private string $nomeTitular;
    private string $numeroConta;

    public function sacar(int $valor): void
    {
        if ($valor > 0 && $valor <= $this->saldoEmCentavos) {
            $this->saldoEmCentavos -= $valor;
        }
    }

    public function depositar(int $valor): void
    {
        if ($valor > 0) {
            $this->saldoEmCentavos += $valor;
        }
    }

    public function setSaldoEmCentavos(int $saldoEmCentavos): void
    {
        $this->saldoEmCentavos = $saldoEmCentavos;
    }

    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}
