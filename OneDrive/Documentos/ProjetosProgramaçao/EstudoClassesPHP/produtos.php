<?php

class Produtos 
{   
    private string $nome;
    private int $quantidade;

    public function __construct(string $nome, int $quantidade)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }
} 
