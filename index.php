<?php
use app\core\Router;

const APP_PATH = __DIR__.'app/';
const CONFIG_PATH = APP_PATH.'config/';
const CONTROLLERS_PATH = APP_PATH.'controllers/';
const CORE_PATH = APP_PATH.'core/';
const MODELS_PATH = APP_PATH.'models/';
const VIEWS_PATH = APP_PATH.'views/';
const ACL_PATH = APP_PATH.'acl/';
const LAYOUT_PATH = VIEWS_PATH.'layout/';
const PUBLIC_PATH = __DIR__.'public/';
const PUBLIC_STYLES = PUBLIC_PATH.'styles/';

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

$router = new Router();
$router->run();