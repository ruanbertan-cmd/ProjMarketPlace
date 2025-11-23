<?php
require_once 'produtos.php';
require_once 'database.php';
$estoque = carregarEstoque();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem-Vindo ao Nosso Mercado</h1>

    <a href="produtosEstoque.php">Cadastrar Produtos em Estoque</a>

    <h2>Lista Produtos em Estoque</h2>
    <?php if (!empty($estoque)): ?>
        <ul>
            <?php foreach ($estoque as $item): ?>
                <li>
                    <strong><?= 'Produto: ' . $item['nome'] . '   ->   ','Qtd: ' . $item['quantidade'] . 'Unidades'?></strong>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum Produto Cadastrado no Estoque!</p>
    <?php endif; ?>
</body>
</html>