<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Developer;
use App\UseCases\DeveloperUseCase;

class DeveloperController
{

    public function index()
    {
        $developers = Developer::all();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($developers);
    }

    public function store(array $dados)
    {
        $use_case = new DeveloperUseCase();
        $response = $use_case->save($dados);

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
    }

    public function show($id)
    {
        $developer = Developer::find($id);

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($developer);
    }

    public function update(array $dados, int $id)
    {
        $use_case = new DeveloperUseCase($dados);
        $response = $use_case->update($dados, $id);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
    }

    public function destroy(int $id)
    {
        $use_case = new DeveloperUseCase();
        $response = $use_case->delete($id);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
    }

}