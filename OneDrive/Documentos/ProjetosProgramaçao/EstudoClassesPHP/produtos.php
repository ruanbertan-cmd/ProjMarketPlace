<?php

class Produtos {
    public readonly string $nome;
    private int $quantidade;

    public function __construct(string $nome, int $quantidade)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
}
