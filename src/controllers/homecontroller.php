<?php

class HomeController {

    public function displayHome(){
        $title = 'Lassap - Accueil';
        include Functions::view('home.html');
    }
}