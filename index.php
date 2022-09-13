<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/function/Functions.php';

if(isset($_GET['route'])){
    $route = $_GET['route'];
}

if(empty($route)){
    require Config::CONTROLLERS_FILES . '/Homecontroller.php';
    $session = new Functions;
    $session->init_session();
    $page = new HomeController();
    $page->displayHome();
}elseif($route === 'accueil'){
    require Config::CONTROLLERS_FILES . '/Homecontroller.php';
    $session = new Functions;
    $session->init_session();
    $page = new HomeController();
    $page->displayHome();
}elseif($route === 'inscription'){
    require Config::CONTROLLERS_FILES . '/UserController.php';
    $session = new Functions;
    $session->init_session();
    $page = new UserController();
    $page->signUpPage();
}elseif($route === 'inscription/handler'){
    require Config::CONTROLLERS_FILES . '/UserController.php';
    $session = new Functions;
    $session->init_session();
    $create = new UserController();
    $create->creatUser_handler();
}elseif($route === 'connexion'){
    require Config::CONTROLLERS_FILES . '/LoginController.php';
    $session = new Functions;
    $session->init_session();
    $page = new LoginController();
    $page->loginPage();
}elseif($route === 'connexion/handler'){
    require Config::CONTROLLERS_FILES . '/LoginController.php';
    $session = new Functions;
    $session->init_session();
    $verify = new LoginController();
    $verify->login_handler();
}
