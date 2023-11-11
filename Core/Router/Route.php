<?php

namespace App\Core\Router;

class Route
{

    public function __construct(
        private string $uri,
        private array $action,
        private string $method,
    ) {
    }

    public static function get($uri, $action): static
    {
        return new static($uri, $action, 'GET');
    }

    public static function post($uri, $action): static
    {
        return new static($uri, $action, 'POST');
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getAction(): array
    {
        return $this->action;
    }
}