<?php
namespace app\controllers;

use app\core\Controller;

class MainController extends Controller {
    public function indexAction() {
        $this->view->render('Основная страница');
    }

    public function listAction() {
        $this->view->render('Список');
    }
}