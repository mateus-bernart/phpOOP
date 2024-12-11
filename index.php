<?php

require 'autoload.php';

use ScreenMatch\Modelo\{
    Filme,
    Episodio,
    Serie,
    Genero
};

use ScreenMatch\Calculos\{
    CalculadoraDeMaratona,
    ConversorNotaEstrela
};

echo "Bem vindo ao ScreenMatch!\n";

$filme = new Filme(
    'Thor Ragnarock',
    2024,
    Genero::SuperHeroi,
    180
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);

// var_dump($filme);

echo "Média: {$filme->media()}\n";
echo $filme->anoLancamento;


$serie = new Serie("Lost", 2002, Genero::Terror, 10, 20, 30);
$episodio = new Episodio($serie, 'piloto', 1);
$episodio->avalia(10);
$serie->avalia(8);
echo $serie->nome;

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de {$duracao} minutos \n";

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie) . PHP_EOL;
echo $conversor->converte($filme) . PHP_EOL;
echo $conversor->converte($episodio) . PHP_EOL;
