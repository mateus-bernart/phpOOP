<?php

enum TipoDeConta
{
    case ContaCorrente;
    case ContaPoupança;
    case ContaInvestimento;
    case ContaUniversitaria;

    function possuiTaxas(): bool
    {
        return match ($this) {
            TipoDeConta::ContaCorrente, TipoDeConta::ContaInvestimento => true,
            TipoDeConta::ContaPoupança, TipoDeConta::ContaUniversitaria => false
        };
    }
}
