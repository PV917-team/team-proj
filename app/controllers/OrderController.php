<?php
namespace app\controllers;

use app\core\Controller;

class OrderController extends Controller {
  public function __construct($route) {
    parent::__construct($route);
    $this->view->layout = 'admin';
  }
}