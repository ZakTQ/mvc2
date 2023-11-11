<?php

namespace App\Core\Router;

use App\Core\Http\Request\Request_Interface;
use App\Core\Settings\Settings_Interface;
use App\Core\View\View_Interface;

class Router implements Router_Interface
{
    private array $routes = [
        "GET" => [],
        "POST" => [],
    ];
    private string $name_controller;
    private string $name_action;

    function __construct(
        private Settings_Interface $settings,
        private View_Interface $view,
        private Request_Interface $request,
    ) {
        $this->initRoutes($this->settings->getRoutes());
    }

    public function getMatch(string $uri, string $method): void
    {
        //dd($this->request->getGet());
        //dd($this->routes);
        $this->selectRoute($uri, $method);
        $this->controllerInit($this->name_controller, $this->name_action);
    }

    private function selectRoute(string $uri, string $method): void
    {
        if (isset($this->routes[$method][$uri])) {
            $route = $this->routes[$method][$uri];
            switch ($route) {
                case is_callable($route):
                    $route();
                    die;
                // break;
                case is_object($route):
                    //dd($route);
                    [$this->name_controller, $this->name_action] = $route->getAction();
                    break;
                default:
                    echo 'err route';
                    break;
            }
        } else {
            echo 'err 404';
        }
    }

    private function controllerInit($controller, $action): void
    {
        $controller = new $controller();
        //
        call_user_func([$controller, 'setView'], $this->view);
        //
        call_user_func([$controller, $action]);
        //$controller->$action();
    }

    private function initRoutes(array $routes): void
    {
        foreach ($routes as $k => $v) {
            switch ($v) {
                case is_callable($v):
                    $this->routes['GET'][$k] = $v;
                    break;
                case is_object($v):
                    /** @var Route $k */
                    $this->routes[$v->getMethod()][$v->getUri()] = $v;
                    break;
                //default:
            }
        }
    }
}
