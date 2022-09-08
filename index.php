<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/function/Functions.php';

if(isset($_GET['route'])){
    $route = $_GET['route'];
}

if(empty($route)){
    require Config::CONTROLLERS_FILES . '/Homecontroller.php';
    $page = new HomeController();
    $page->displayHome();
}elseif($route === 'accueil'){
    require Config::CONTROLLERS_FILES . '/Homecontroller.php';
    $page = new HomeController();
    $page->displayHome();
}elseif($route === 'inscription'){
    require Config::CONTROLLERS_FILES . '/UserController.php';
    $page = new UserController();
    $page->signUpPage();
}elseif($route === 'inscription/handler'){
    require Config::CONTROLLERS_FILES . '/UserController.php';
    $create = new UserController();
    $create->creatUser_handler();
}elseif($route === 'connexion'){
    require Config::CONTROLLERS_FILES . '/LoginController.php';
    $page = new LoginController();
    $page->loginPage();
}
