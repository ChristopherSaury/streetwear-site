<?php 

function signUpPage(){
    $title = 'Lassap - Inscription';
    include Functions::view('signup.html');
}

function creatUser_handler(){
    if(
        !empty($_POST['mail']) && !empty($_POST['password'])
    && !empty($_POST['lastname']) && !empty($_POST['firstname'])
    && !empty($_POST['country']) && !empty($_POST['address'])
    && !empty($_POST['city']) && !empty($_POST['postcode'])
    && is_numeric($_POST['postcode']) && !empty($_POST['phone'])
    && is_numeric($_POST['phone']) && !empty($_POST['birth_date'])){

    include Config::MODELS_FILE . '/userModel.php';

    // $_POST['mail'] = entrySafety($_POST['mail']);
    // $_POST['password'] = entrySafety($_POST['password']);
    // $_POST['lastname'] = entrySafety($_POST['lastname']);
    // $_POST['firstname'] = entrySafety($_POST['firstname']);
    // $_POST['country'] = entrySafety($_POST['country']);
    // $_POST['address'] = entrySafety($_POST['address']);
    // $_POST['building-floor'] = entrySafety($_POST['building-floor']);
    // $_POST['city'] = entrySafety($_POST['city']);
    // $_POST['postcode'] = entrySafety($_POST['postcode']);
    // $_POST['phone'] = entrySafety($_POST['phone']);
    // $_POST['birth-date'] = entrySafety($_POST['birth-date']);

    insertUser($_POST['mail'], $_POST['password'], $_POST['lastname'], $_POST['firstname'], $_POST['country'], $_POST['address'] , $_POST['building_floor'], $_POST['city'], $_POST['postcode'], $_POST['phone'], $_POST['birth_date']);

    Functions::redirection('accueil');


    }else{
        // echo "error 500";
        Functions::redirection('accueil');
    }
}