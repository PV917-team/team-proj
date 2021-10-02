<?php
namespace app\controllers;

use app\core\Controller;

class OrderController extends Controller {
  public function __construct($route) {
    parent::__construct($route);
    $this->view->layout = 'admin';
  }

  public function addAction() {
    $this->view->render('Добавить заказ');
  }

  public function editAction() {
    $this->view->render('Редактировать заказ');
  }

  public function deleteAction() {
    $this->view->render('Удалить заказ');
  }

  public function ordersAction() {
    $this->view->render('Список заказов');
  }
}