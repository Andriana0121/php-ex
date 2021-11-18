<?php

namespace controllers;

use core\Controller;

class MainController extends Controller
{
    public function actionIndex()
    {
        $this->view->render("Home");
    }

    public function actionAbout()
    {
        $this->view->render("About");
    }

    public function actionContact()
    {
        $this->view->render("Contact");
    }
}
