<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">

        <h1 class="text-center mb-4">Cadastre os Produtos em Estoque</h1>

        <div class="card shadow-sm p-4">
            <form name="formEstoque" action="classes.php" method="get">
                
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do Produto:</label>
                    <input type="text" id="nome" name="nome" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade:</label>
                    <input type="number" id="quantidade" name="quantidade" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Cadastrar Produto</button>
            </form>
        </div>

        <div class="text-center mt-4">
            <a href="/" class="btn btn-secondary">Voltar à Tela Inicial</a>
        </div>

    </div>

</body>
</html>
