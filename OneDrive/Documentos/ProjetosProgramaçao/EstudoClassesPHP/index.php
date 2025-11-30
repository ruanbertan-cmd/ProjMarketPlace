<?php
require_once 'produtos.php';
require_once 'database.php';
$estoque = carregarEstoque();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4 text-center">

    <h1 class="mb-4 text-center">Bem-Vindo ao Nosso Mercado</h1>

    <a href="produtosEstoque.php" class="btn btn-primary mb-4 text-center">Cadastrar Produtos em Estoque</a>

    <h2 class="text-center">Lista de Produtos em Estoque</h2>

    <table class="table table-striped table-bordered mt-3 text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($estoque)): ?>
            <?php foreach ($estoque as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['nome']) ?></td>
                    <td><?= htmlspecialchars($item['quantidade']) ?> unidades</td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="2" class="text-center text-muted">Nenhum produto cadastrado.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
