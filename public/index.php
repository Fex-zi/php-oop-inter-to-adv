<?php

declare(strict_types = 1);

use App\App;
use App\Config;
use App\Controllers\HomeController;
use App\Router;

require_once __DIR__ . '/../vendor/autoload.php';

// spl_autoload_register(function ($class) {
//     // Convert namespace separators to directory separators
//     $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
    
//     if(file_exists($path)){
//     require $path;
//     }
// });

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');

$router = new Router();

$router
    ->get('/', [HomeController::class, 'index']);

(new App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    new Config($_ENV)
))->run();
