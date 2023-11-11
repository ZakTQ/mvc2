<?php

namespace App\Core\Settings;

class Settings implements Settings_Interface
{
    private array $settings = [];

    public function __construct()
    {
        $this->settings['routes'] = include_once APP_PATH . DIRECTORY_SEPARATOR . 'routes' . DIRECTORY_SEPARATOR . 'routes.php';

        $this->settings['config'] = include_once APP_PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';
    }

    public function getRoutes(): array
    {
        return $this->settings['routes'];
    }

    public function getConfig(): array
    {
        return $this->settings['config'];
    }
}