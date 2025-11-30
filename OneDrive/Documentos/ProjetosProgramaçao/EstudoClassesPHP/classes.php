<?php
require_once 'produtos.php';
require_once 'database.php';

$produto = new Produtos($_GET['nome'], (int)$_GET['quantidade']);

$nome = $produto->getNome();
$quantidade = $produto->getQuantidade();

$estoque = carregarEstoque();

$encontrou = false;

foreach ($estoque as $i => $item) {
    if (strtolower($item['nome']) === strtolower($nome)) {
        $estoque[$i]['quantidade'] += $quantidade;
        $encontrou = true;
        break;
    }
}

if (!$encontrou) {
    $estoque[] = [
        'nome' => $nome,
        'quantidade' => $quantidade
    ];
}

var_dump($estoque);
//salvarEstoque($estoque);

//header('Location: index.php');
exit;


