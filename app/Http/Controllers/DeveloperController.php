<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\UseCases\DeveloperUseCase;

class DeveloperController
{

    public function store(array $dados)
    {
        
        $use_case = new DeveloperUseCase();

        $stored = $use_case->save($dados);

        return $stored;
    }

}