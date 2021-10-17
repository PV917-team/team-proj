<?php
use app\core\Router;

const URL = '//https://files.000webhost.com//';
const ROOT = __DIR__.'/';
const APP_PATH = ROOT.'app/';
const CONFIG_PATH = ROOT.'app/config/';
const CONTROLLERS_PATH = ROOT.'app/controllers/';
const CORE_PATH = ROOT.'app/core/';
const MODELS_PATH = ROOT.'app/models/';
const VIEWS_PATH = ROOT.'app/views/';
const ACL_PATH = ROOT.'app/acl/';
const LAYOUT_PATH = ROOT.'app/views/layout/';
const PUBLIC_PATH = ROOT.'public/';
const PUBLIC_STYLES = ROOT.'public/styles/';

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    // echo $path.'</br>';
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

$router = new Router();
$router->run();