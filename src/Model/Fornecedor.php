<?php
namespace APP\Model;

class Fornecedor{
    private string $nome;
    private float $cnpj;
    private float $telefone;
    private bool $isActive;

    public function __construct(
        string $nome,
        float $cnpj,
        float $telefone,
        bool $isActive = true
    )
    {
        $this -> nome = $nome;
        $this -> cnpj = $cnpj;
        $this -> telefone = $telefone;
        $this -> isactive = $isActive;
    }
}