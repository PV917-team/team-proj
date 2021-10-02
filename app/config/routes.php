<?php

// Мап лист по сайту

return [
    // MainController
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    'list' => [
        'controller' => 'main',
        'action' => 'list'
    ],
    // AdminController
    'admin' => [
        'controller' => 'admin',
        'action' => 'admin'
    ],
    'login' => [
        'controller' => 'admin',
        'action' => 'login'
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout'
    ],
    'admin/delete' => [
        'controller' => 'admin',
        'action' => 'delete'
    ],
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add'
    ],
    'admin/edit' => [
        'controller' => 'admin',
        'action' => 'edit'
    ],
    // OrderController
    'admin/orders' => [
        'controller' => 'order',
        'action' => 'orders'
    ],
    'admin/order/add' => [
        'controller' => 'order',
        'action' => 'add'
    ],
    'admin/order/edit' => [
        'controller' => 'order',
        'action' => 'edit'
    ],
    'admin/order/delete' => [
        'controller' => 'order',
        'action' => 'delete'
    ],
];