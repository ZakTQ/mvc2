<?php

namespace App\Core;

use App\Core\Container\Container;

class App
{
    function __construct(
        public $container = new Container()
    ) {
    }

    public function start()
    {
        $this->container->router->getMatch(
            $this->container->request->getUri(),
            $this->container->request->getMethod(),
        );
    }
}
