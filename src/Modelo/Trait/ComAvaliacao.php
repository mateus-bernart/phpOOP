<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Exceptions\NotaInvalidaException;

trait ComAvaliacao
{
    private array $notas = [];

    public function avalia(float $nota): void
    {
        if ($nota < 0 || $nota > 10) {
            throw new NotaInvalidaException();
        }
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $qtdNotas = count($this->notas);
        $somaNotas = array_sum($this->notas);

        $media = $somaNotas / $qtdNotas;
        return $media;
    }
}
