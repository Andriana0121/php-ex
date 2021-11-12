<?

namespace core;

use core\View;

abstract class Controller
{
    protected $route;
    public $view;
    public $model;
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($this->route);
        //$this->before;
        $this->model = $this->loadModel($this->route['controller']);
    }

    public function loadModel($nameModel)
    {
        $pathModel = "models\\" . ucfirst($nameModel);
        if (class_exists($pathModel)) {
            return new $pathModel;
        }
    }
}
