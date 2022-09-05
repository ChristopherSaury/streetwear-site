<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/function/Functions.php';

if(isset($_GET['route'])){
    $route = $_GET['route'];
}

if(empty($route)){
    require Config::CONTROLLERS_FILES . '/homecontroller.php';
    displayHome();
}elseif($route === 'accueil'){
    require Config::CONTROLLERS_FILES . '/homecontroller.php';
    displayHome();
}elseif($route === 'inscription'){
    require Config::CONTROLLERS_FILES . '/userController.php';
    $page = new UserController();
    $page->signUpPage();
}elseif($route === 'inscription/handler'){
    require Config::CONTROLLERS_FILES . '/userController.php';
    $create = new UserController();
    $create->creatUser_handler();
}
