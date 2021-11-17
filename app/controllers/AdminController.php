<?

namespace controllers;

use core\Controller;
use core\View;

class AdminController extends Controller
{

    public function actionIndex()
    {
        $this->view->render("IndexAdmin");
    }
    public function actionCreate()
    {
        $vars = $this->model->getCategory();
        $this->view->render("Create", $vars);
        $this->model->createProduct();
    }

    /** 
     *
     *Show list of products
     *@param object $model
     *
     */
    public function actionList()
    {
        $vars = $this->model->getProducts();
        $this->view->render("ListAdmin", $vars);
    }

    public function actionView()
    {
        $id = $this->route['id'];
        $vars = $this->model->getProductById($id);
        $this->view->render("OneProductAdmin", $vars);
    }
    public function actionDelete()
    {
        $id = $this->route['id'];
        $this->model->deleteProduct($id);
    }
    public function actionEdit()
    {
        $id = $this->route['id'];
        $vars = $this->model->getProductById($id);
        $this->view->render("Page updating", $vars);
        $this->model->updateProduct($id);
    }
}
