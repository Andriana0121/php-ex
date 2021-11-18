<?

namespace controllers;

use core\Controller;

class ProductsController extends Controller
{
    /** 
     *
     *Show list of products
     *@param object $model
     *
     */
    public function actionList()
    {
        $vars = $this->model->getProducts();
        $this->view->render('Products', $vars);
    }

    /** 
     *
     *Show one product
     *@param object $model
     *
     */
    public function actionView()
    {
        $id = $this->route['id'];
        $vars = $this->model->getProductById($id);
        $this->view->render('One product', $vars);
    }
}
