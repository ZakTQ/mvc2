<?php

namespace App\Core\View;

interface View_Interface
{
    public function render($page, $data = []);
}