<?php
namespace app\controllers;

use app\core\Controller;

class AdminController extends Controller {
  public function __construct($route) {
    parent::__construct($route);
    $this->view->layout = 'admin';
  }

  public function adminAction() {
    $this->view->render('Админ панель');
  }

  public function loginAction() {
    $this->view->render('Логин');
  }
}