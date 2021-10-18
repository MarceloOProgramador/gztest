<?php declare(strict_types=1);

require "./bootstrap.php";

use CoffeeCode\Router\Router;

$router = new Router("https://localhost");


$router->namespace("app/Http/Controllers");

$router->get("/desenvolvedor", "DeveloperController:index");
$router->post("/desenvolvedor", "DeveloperController:store");
$router->put("/desenvolvedor/{id}", "DeveloperController:update");
$router->get("/desenvolvedor/{id}", "DeveloperController:show");
$router->delete("/desenvolvedor/{id}", "DeveloperController:delete");

$router->dispatch();