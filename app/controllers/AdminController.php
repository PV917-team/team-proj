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

  public function addAction() {
    $this->view->render('Добавить');
  }

  public function loginAction() {
    // Записал в сессию админа для доступа
    $_SESSION['admin'] = 1;
    $this->view->render('Логин');
  }

  public function logoutAction() {
    $this->view->render('Выход');
  }

  public function deleteAction() {
    $this->view->render('Удалить');
  }

  public function editAction() {
    $this->view->render('Редактировать');
  }
}