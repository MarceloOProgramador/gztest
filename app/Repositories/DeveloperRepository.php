<?php declare(strict_types=1);

namespace App\Repositories;

use App\UseCases\Dtos\DtoInterface;

class DeveloperRepository
{

    public function __construct(
        private DtoInterface $dto
    )
    {}

    public function store()
    {
        
        return FALSE;
    }

}