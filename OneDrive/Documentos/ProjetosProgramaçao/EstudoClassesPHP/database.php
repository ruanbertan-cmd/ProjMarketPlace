<?php

function carregarEstoque() {
    $arquivo = 'estoque.json';
    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, json_encode([]));
    }

    $conteudo = file_get_contents($arquivo);
    return json_decode($conteudo, true) ?? [];
}

function salvarEstoque($estoque) {
    $arquivo = 'estoque.json';
    file_put_contents($arquivo, json_encode($estoque, JSON_PRETTY_PRINT));
}