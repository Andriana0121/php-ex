<?php

namespace core;

class View
{
    protected $route;
    protected $path;
    protected $layout = "default";

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = ROOT . "/app/views/" . $route['controller'] . "/" . $route['action'] . ".php";
    }

    public function render($title, $vars = [])
    {
        if (isset($_SESSION['status']) && isset($_SESSION['userName'])) {
            $this->layout = 'custom';
            if ($_SESSION['userName'] == 'ADMIN') {
                $this->layout = 'admin';
            }
        }
        if (file_exists($this->path)) {
            ob_start();
            require $this->path;
            $content = ob_get_clean();

            require ROOT . "/app/views/layouts/" . $this->layout . ".php";
        }
    }

    public static function errorCode($type)
    {
        http_response_code($type);
        $path = ROOT . "/app/views/errors/" . $type . ".php";
        if (file_exists($path)) {
            require $path;
        }
        exit;
    }

    public function redirect($url)
    {
        header('location:' . $url);
        exit;
    }
}
