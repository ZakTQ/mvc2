<?php

namespace App\Controllers;

use App\Core\Controller\Controller;

class Auth_Controller extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view()->render('auth');
    }
}