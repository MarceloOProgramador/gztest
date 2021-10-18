<?php declare(strict_types=1);

require "./bootstrap.php";

use CoffeeCode\Router\Router;

$router = new Router("https://localhost");


$router->namespace("app/Http/Controllers");

$router->get("/developers", "DeveloperController:index");
$router->post("/developers", "DeveloperController:store");
$router->put("/developers/{id}", "DeveloperController:update");
$router->get("/developers/{id}", "DeveloperController:show");
$router->delete("/developers/{id}", "DeveloperController:delete");

$router->dispatch();