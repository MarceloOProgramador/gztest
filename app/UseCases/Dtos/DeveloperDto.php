<?php declare(strict_types=1);

namespace App\UseCases\Dtos;

class DeveloperDtos 
{
    
    private string  $nome;
    private string  $sexo;
    private int     $idade;
    private string  $hobby;
    private string  $datanascimento;
    
    public function __construct(array $dados)
    {
        $this->nome = $dados["nome"];
        $this->sexo = $dados["sexo"];
        $this->idade = $dados["idade"];
        $this->hobby = $dados["hobby"];
        $this->datanascimento = $dados["datanascimento"];
    }

}