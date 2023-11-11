<?php

namespace App\Core\Settings;

interface Settings_Interface
{
    public function getRoutes():array;

    public function getConfig() :array;
}