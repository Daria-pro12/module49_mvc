<?php

namespace App\core;

define('CONTROLLERS_NAMESPACE', 'App\\controllers\\');

class Route
{
    public static function start()
    {
        $controllerClassName = 'home';
        $actionName = 'index';
        $payload = [];
 
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        $controllerClassName = empty($routes[1]) ? 'home' : $routes[1];
        $actionName = empty($routes[2]) ? 'index' : $routes[2];

       if (!empty($routes[3])) {
            $payload = array_slice($routes, 3);

        }

        $controllerName = CONTROLLERS_NAMESPACE . ucfirst($controllerClassName);
        $controllerFile = ucfirst(strtolower($controllerClassName)) . '.php';
        $controller_path = CONTROLLER . $controllerFile;

        if (file_exists($controller_path)) {
            include_once $controller_path;
        } else {
            Route::error();
        }

        $controller = new $controllerName();

        $method = $actionName;
        if (method_exists($controller, $method)) {
            $controller->$method($payload);
        } else {
            Route::error();
        }
    }

    public static function error() {

        header('HTTP 404 Not Found');
        header('Status 404 Not Found');
        header('Location:/error');
    }
}