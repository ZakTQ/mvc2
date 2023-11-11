<?php

namespace App\Core\View;

use App\Core\Exceptions\ViewNotFound;

class View implements View_Interface
{
    private string $views_folder = APP_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR;
    private string $pages_folder = 'pages' . DIRECTORY_SEPARATOR;
    private string $layouts_folder = 'layouts' . DIRECTORY_SEPARATOR;

    public function __construct()
    {
    }

    public function views(): string
    {
        return $this->views_folder;
    }

    public function layouts(): string
    {
        return $this->views_folder . $this->layouts_folder;
    }

    public function pages(): string
    {
        return $this->views_folder . $this->pages_folder;
    }

    public function render($page, $data = [])
    {
        $page_file = $page . '.php';

        if (file_exists($this->pages() . $page_file)) {

            extract($data);

            $goll = function ($layuot) {
                $path_name = str_replace('.', DIRECTORY_SEPARATOR, $layuot);

                if (file_exists($this->layouts() . $path_name . '.php')) {
                    return include_once $this->layouts() . $path_name . '.php';
                } else {
                    echo "Component not found $path_name";
                }

            };
            return include_once $this->pages() . $page_file;

        } else {
            throw new ViewNotFound("View $page_file not found");
        }
    }

}