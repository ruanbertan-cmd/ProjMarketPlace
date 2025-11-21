<?php

require __DIR__ . "/screen-match//src/Model/Filme.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme();
$filme->defineAnoLancamento(2022);
$filme->defineGenero('Ação');
/*$filme->nome = 'Thor';
$filme->anoLancamento = '2021';
$filme->genero = 'super-heroi';*/

$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);
$filme->avalia(2);
$filme->avalia(1);

var_dump($filme);

echo "Média das avaliações: " . $filme->media() . "\n";

echo "Ano de lançamento: " . $filme->anoLancamento() . "\n";

echo "Genero Filme: " . $filme->genero() . "\n";