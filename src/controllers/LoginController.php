<?php

class LoginController{
    public function loginPage(){
        $title = 'Lassap - Connexion';
        include Functions::view('login.html');
    }
}