<?php

return [
    // MainController
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    // AdminController
    'admin' => [
        'controller' => 'admin',
        'action' => 'index'
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
    // OrderController
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
    'admin/orders' => [
        'controller' => 'admin',
        'action' => 'orders'
    ],
];