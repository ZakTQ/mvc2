<?php

namespace App\Controllers;

use App\Core\Controller\Controller;

class Main_Controller extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        // $list = compact(
        //     $posts = [
        //         'hello' => 'gg',
        //         'wp' => 'pp',
        //     ],
        //     $posts2 = [
        //         'hello2' => 'gg22',
        //         'wp' => 'pp',
        //     ],
        // );

        // $list = [
        // 'hello' => 'gg',
        // 'wp' => 'pp',
        // ];

        $list =
            [
                $posts = [
                    'hello' => 'gg',
                    'wp' => 'pp',
                ],
                $posts2 = [
                    'hello2' => 'gg22',
                    'wp' => 'pp',
                ],
            ];

        $this->view()->render('main', $list);
    }
}