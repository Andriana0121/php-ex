<?php

namespace core;

use core\View;

class Router
{
    protected $routes = [];
    protected $params = [];
    /** 
     *
     *gets array with routes 
     *@param array $arr
     *
     */
    public function __construct()
    {
        $arr = require ROOT . "/application/config/routes.php";
        //debug($arr);
        foreach ($arr as $route => $params) {
            $this->add($route, $params);
        }
    }
    /** 
     *
     *add routes to protected variable  $routes
     *@param array $this->routes
     *
     */
    public function add($route, $params)
    {
        $route = "#^" . $route . "$#";
        $this->routes[$route] = $params;
    }
    /** 
     *
     *gets URI
     *@param string URI
     *
     */
    protected function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], "/");
        }
    }
    /** 
     *
     *match routes 
     *@param array $this->params
     *return bool variable
     */
    public function match()
    {
        $uri = $this->getURI();
        foreach ($this->routes as $uriPattern => $params) {
            if (preg_match($uriPattern, $uri, $matches)) {
                $this->params = $params;
                if (array_key_exists("id", $this->params)) {
                    $result = preg_replace($uriPattern, $this->params['id'], $uri);
                    $this->params['id'] = $result;
                }
                return true;
            }
        }
        return false;
    }

    /** 
     *
     *connets controller and action by URI
     *@param object $controller
     *
     */
    public function run()
    {
        if ($this->match()) {
            $controllerName = "controllers\\" . ucfirst($this->params['controller']) . "Controller";
            if (class_exists($controllerName)) {
                $actionName = "action" . ucfirst($this->params['action']);
                if (method_exists($controllerName, $actionName)) {

                    $controller = new $controllerName($this->params);
                    $controller->$actionName();
                } else {
                    View::errorCode(404);
                }
            } else {
                View::errorCode(404);
            }
        } else {
            View::errorCode(404);
        }
    }
}
