<?php
// session_start();
// error_reporting(~E_NOTICE);

// // 'Home' is the default controller 
// $controller = $_GET['c'] ?? 'Post';
// // 'index' is the default method 
// $method = $_GET['m'] ?? 'index';

// include_once "controller/Controller.class.php";
// include_once "controller/$controller.class.php";

// if (!isset($_SESSION['user_id']) && $controller != 'User') {
//     header('Location: index.php?c=User&m=register_form');
// } else {
//     (new $controller)->$method();
// }
// // session_destroy();
session_start();
error_reporting(~E_NOTICE);

// 'Home' is the default controller 
$controller = $_GET['c'] ?? 'Home';
// 'index' is the default method 
$method = $_GET['m'] ?? 'index';

include_once "controller/Controller.class.php";

// Ensure the requested controller class file is included
$controllerFile = "controller/$controller.class.php";
if (file_exists($controllerFile)) {
    include_once $controllerFile;
} else {
    die("Controller file not found.");
}

// If the user is not logged in and not accessing the Home or User controller, redirect to the login form
if (!isset($_SESSION['user_id']) && !in_array($controller, ['Home', 'User'])) {
    header('Location: index.php?c=User&m=login_form');
    exit;
}

// Ensure the controller class exists before trying to instantiate it
if (class_exists($controller)) {
    (new $controller())->$method();
} else {
    die("Controller class not found.");
}


