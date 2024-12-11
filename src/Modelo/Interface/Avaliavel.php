<?php

namespace ScreenMatch\Modelo;

//Todos os métodos são abstratos!
//Todas as funções vão ser overrided (evita o problema diamante, quando uma classe
//herda de 2 classes e não sabe de qual delas implementar o método.
interface Avaliavel
{
    public function avalia(float $nota): void;
    public function media(): float;
}
