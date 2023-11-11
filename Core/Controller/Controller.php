<?php

namespace App\Core\Controller;

use App\Core\View\View_Interface;

abstract class Controller
{
    private View_Interface $view;

    public function __construct()
    {
    }

    public function setView(View_Interface $view): void
    {
        $this->view = $view;
    }

    public function view(): View_Interface
    {
        return $this->view;
    }
}