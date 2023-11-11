<?php

namespace App\Core\Container;

use App\Core\Http\Request\Request;
use App\Core\Http\Request\Request_Interface;
use App\Core\Router\Router;
use App\Core\Router\Router_Interface;
use App\Core\Settings\Settings;
use App\Core\Settings\Settings_Interface;
use App\Core\View\View;
use App\Core\View\View_Interface;

class Container
{
    public readonly Settings_Interface $settings;
    public readonly View_Interface $view;
    public readonly Request_Interface $request;
    public readonly Router_Interface $router;

    function __construct()
    {
        $this->initServices();
    }

    public function initServices()
    {
        $this->settings = new Settings();
        $this->view = new View();
        $this->request = new Request();
        $this->router = new Router(
            $this->settings,
            $this->view,
            $this->request,
        );
    }
}
