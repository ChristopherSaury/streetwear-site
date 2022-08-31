<?php
require __DIR__ . '/config.php';
require __DIR__ . '/function/function.php';

if(isset($_GET['route'])){
    $route = $_GET['route'];
}

if(empty($route)){
    require CONTROLLERS_FILES . '/homecontroller.php';
    displayHome();
}elseif($route == 'accueil'){
    require CONTROLLERS_FILES . '/homecontroller.php';
    displayHome();
}
