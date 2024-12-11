<?php

namespace ScreenMatch\Calculos;

//busca desde o namespace raiz até a classe que necessita.

use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        //Tratar excessões de erro.
        try {
            $nota = $avaliavel->media();
            return round($nota) / 2;
        } catch (DivisionByZeroError $erro) {
            return 0;
        }
    }
}
