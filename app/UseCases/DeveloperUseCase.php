<?php declare(strict_types=1);

namespace App\UseCases;

use App\Repositories\DeveloperRepository;
use App\UseCases\Dtos\DeveloperDto;

class DeveloperUseCase 
{

    public function save(array $dados)
    {
        $repository = new DeveloperRepository(new DeveloperDto($dados));
        $stored = $repository->store();

        if($stored)
            return TRUE;
        else
            return FALSE;
    }

}