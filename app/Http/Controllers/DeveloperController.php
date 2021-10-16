<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\UseCases\DtoInterface;
use App\UseCases\Dtos\DeveloperDto;
use App\Repositories\DeveloperRepository;

class DeveloperController
{

    public function store(array $dados)
    {
        
        $repository = new DeveloperRepository();

        $stored = $repository->save(new DeveloperDto($dados));

        return $stored;
    }

}