<?php

namespace App\Core\Http\Request;

class Request implements Request_Interface
{
    private string $uri;
    private array $get;
    private array $post;
    private string $method;
    // private array $cookie,
    // private array $files,
    // private array $server,
    public function __construct(
    ) {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->get = $_GET;
        $this->post = $_POST;
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function getUri(): string
    {
        $uri = strtok($this->uri,'?');
        return $uri;
    }

    public function getGet(): array
    {
        return $this->get;
    }

    public function getPost(): array
    {
        return $this->post;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

}