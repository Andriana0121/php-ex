<?php

namespace controllers;

use core\Controller;

class AccountController extends Controller
{
    public function actionView()
    {
        //to do :Разделить на два чтоб при submit выполнялся другой action
        $this->view->render("Login");
    }

    public function actionLogin()
    {
        if (isset($_POST) && !empty($_POST)) {
            $login = $_POST['login'];
            $pass = $_POST['pass'];

            $data = $this->model->getDataUser();

            foreach ($data as $key => $user) {
                if ($login == $user['Login'] && $pass == $user['Password']) {
                    $_SESSION['status'] = true;
                    $_SESSION['userName'] = $user['Name'];
                    $_SESSION['id_user'] = $user['ID'];
                    $this->view->redirect('/');
                    die();
                }
                $this->view->redirect('/account/view');
            }
        }
    }
    public function actionLogout()
    {
        if (isset($_SESSION['status']) && isset($_SESSION['userName'])) {
            unset($_SESSION['status']);
            unset($_SESSION['userName']);
            unset($_SESSION['id_user']);
        }
        $this->view->redirect('/');
        die();
    }

    public function actionRegister()
    {
        $this->view->render("Register");
        if (
            !empty($_POST['name']) &&
            !empty($_POST['login']) &&
            !empty($_POST['password'])
        ) {
            $dataUser = [
                'name' => $_POST['name'],
                'login' => $_POST['login'],
                'pass' => $_POST['password'],
            ];
            //debug($dataUser);
            $this->model->saveDataUser($dataUser);
        }
    }

    public function actionCart()
    {
        if (isset($_SESSION['status'])) {
            $id_user = $_SESSION['id_user'];
            $vars = $this->model->getCarts($id_user);
            $this->view->render('Cart', $vars);
        }
    }

    public function actionAdd()
    {
        $id = $this->route['id'];
        if (!isset($_SESSION['status'])) {
            $this->view->redirect("/products/" . $id);
            die();
        }


        $id_user = $_SESSION['id_user'];
        $data = $this->model->getProduct($id);
        $this->model->addProduct($id_user, $data[0]);

        $this->view->redirect("/products/" . $id);
        die();
    }

    public function actionDelete()
    {
        $id = $this->route['id'];
        $this->model->deleteCart($id);

        $this->view->redirect('/account/cart');
    }
}
