<?php

namespace ScreenMatch\Calculos;

use ScreenMatch\Modelo\Titulo;

class CalculadoraDeMaratona
{
    private int $duracaoMaratona;

    //Recebe o objeto titulo, ele que contém cada função diferente do titulo para calcular a duração (Polimorfismo)
    public function inclui(Titulo $titulo): void
    {
        $this->duracaoMaratona = $titulo->duracaoEmMinutos();
    }

    public function duracao(): int
    {
        return $this->duracaoMaratona;
    }
}
