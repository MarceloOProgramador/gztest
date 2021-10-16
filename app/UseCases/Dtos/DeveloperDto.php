<?php declare(strict_types=1);

namespace App\UseCases\Dtos;

use App\UseCases\Dtos\DtoInterface;

class DeveloperDto implements DtoInterface
{
    
    private string  $nome;
    private string  $sexo;
    private int     $idade;
    private string  $hobby;
    private string  $datanascimento;
    
    public function __construct(array $dados)
    {
        $this->nome             = $dados["nome"];
        $this->sexo             = $dados["sexo"];
        $this->idade            = $dados["idade"];
        $this->hobby            = $dados["hobby"];
        $this->datanascimento   = $dados["datanascimento"];
    }


    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Get the value of hobby
     */ 
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * Get the value of datanascimento
     */ 
    public function getDatanascimento()
    {
        return $this->datanascimento;
    }
}