<?php

enum DiaDaSemana: int
{
    case Domingo = 0;
    case Segunda = 1;
    case Terca = 2;
    case Quarta = 3;
    case Quinta = 4;
    case Sexta = 5;
    case Sabado = 6;

    public function EhFimDeSemana(): bool
    {
        return match ($this) {
            DiaDaSemana::Sabado, DiaDaSemana::Domingo => true,
            default => false
        };
    }
}

class Funcionario
{
    public function __construct(
        public string $nome,
        public float $salario,
        public DiaDaSemana $diaSemanaPagamento
    ) {
    }
}

$ruan = new Funcionario('ruan', 2000, DiaDaSemana::Segunda);
var_dump($ruan->diaSemanaPagamento->EhFimDeSemana());