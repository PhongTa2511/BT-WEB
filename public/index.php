<?php
    require_once('../config/database.php');
    require_once ('../controllers/productController.php');
    require_once('./Route.php');
// require_once ./Router.php;

    $db = DatabaseConfig::getConnection();

    $productController = new productController($db);
    if (isset($_SERVER['REQUEST_URI']) == '/' && $_SERVER['REQUEST_METHOD'] == 'GET') {
        $productController->index();
        exit();
        echo("home");
    }
     

// Bật hiển thị lỗi trong môi trường phát triển
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// // Lấy URL từ server
// $requestUri = $_SERVER['REQUEST_URI'];

// // Tách URL để định tuyến
// $scriptName = dirname($_SERVER['SCRIPT_NAME']);
// $uri = str_replace($scriptName, '', $requestUri);
// $uri = trim($uri, '/');

// // Phân tích URL để lấy controller và action
// $segments = explode('/', $uri);
// $controllerName = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'productController';
// $methodName = !empty($segments[1]) ? $segments[1] : 'index';
// echo($methodName);

// // Đường dẫn tới controller
// $controllerFile = '../controllers/productController.php';

// if (file_exists($controllerFile)) {
//     require_once $controllerFile;

//     if (class_exists($controllerName)) {
//         $controller = new $controllerName($db);

//         if (method_exists($controller, $methodName)) {
//             call_user_func_array([$controller, $methodName], array_slice($segments, 2));
//         } else {
//             echo "Method $methodName not found in controller $controllerName.";
//         }
//     } else {
//         echo "Controller class $controllerName not found.";
//     }
// } else {
//     echo "Controller file $controllerFile not found.";
// }

?>


<!-- if ($_SERVER['REQUEST_URI'] == '/' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    $controller->index();
} elseif ($_SERVER['REQUEST_URI'] == '/create' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    $controller->create();
} elseif ($_SERVER['REQUEST_URI'] == '/store' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->store();
} elseif (strpos($_SERVER['REQUEST_URI'], '/edit') === 0 && $_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    $controller->edit($id);
} elseif (strpos($_SERVER['REQUEST_URI'], '/update') === 0 && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $controller->update($id);
} elseif (strpos($_SERVER['REQUEST_URI'], '/delete') === 0 && $_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    $controller->delete($id);
} else {
    echo "404 Not Found";
} -->
