<?php

namespace App\Core\Http\Request;

interface Request_Interface
{
    public function getUri(): string;
    public function getGet(): array;
    public function getPost(): array;
    public function getMethod(): string;

}