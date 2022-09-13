<?php
require_once Config::MODELS_FILE . '/Model.php';

class CountryModel extends Model{
    public function getAfricanCountry(){
        $response = $this->sendQuery("SELECT * FROM `country` WHERE continent = 1 ORDER BY name ASC" );

        if(!$response) echo "error Country Model";
        return $response->fetchAll();
    }

    public function getAmericanCountry(){
        $response = $this->sendQuery("SELECT * FROM `country` WHERE continent = 2 ORDER BY name ASC" );

        if(!$response) echo "error Country Model";
        return $response->fetchAll();
    }

    public function getAsianCountry(){
        $response = $this->sendQuery("SELECT * FROM `country` WHERE continent = 3 ORDER BY name ASC" );

        if(!$response) echo "error Country Model";
        return $response->fetchAll();
    }

    public function getEuropeanCountry(){
        $response = $this->sendQuery("SELECT * FROM `country` WHERE continent = 4 ORDER BY name ASC" );

        if(!$response) echo "error Country Model";
        return $response->fetchAll();
    }

    public function getOceanianCountry(){
        $response = $this->sendQuery("SELECT * FROM `country` WHERE continent = 5 ORDER BY name ASC" );

        if(!$response) echo "error Country Model";
        return $response->fetchAll();
    }
}