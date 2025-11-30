<?php

enum TipoConta
{
    case Corrente;
    case Poupanca;
    case Universitaria;
    case Investimento;

    public function possuiTaxa(): bool
    {
        return match($this) {
            TipoConta::Corrente, TipoConta::Investimento => true,
            TipoConta::Poupanca, TipoConta::Universitaria=> false,
        };
    }
}

class Conta
{
    private int $saldoEmConta;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly TipoConta $tipo,
    ){
        $this->saldoEmConta = 0;
    }

    public function depositar(int $valorADepositar): void
    {
        if ($valorADepositar > 0) {
            $this->saldoEmConta += $valorADepositar;
        }
    }

    public function sacar(int $valorASacar): void
    {
        if ($valorASacar > 0 && $valorASacar < $this->saldoEmConta) {
            $this->saldoEmConta -= $valorASacar;
        }
    }
}