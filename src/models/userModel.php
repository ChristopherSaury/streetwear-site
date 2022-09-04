<?php

function insertUser($mail,$password,$lastname,$firstname,$country,$address, $building_floor = null,$city,$postcode,$phone,$birth_date){
    $db = Functions::connection();
    $request = "INSERT INTO user (
            mail,
            password,
            lastname,
            firstname,
            country,
            address,
            building_floor,
            city,
            postcode,
            phone,
            birth_date
            ) VALUES ( ?,?,?,?,?,?,?,?,?,?,?)";

    $response = $db->prepare($request);
    $response->execute(array(
        $mail,
        $password,
        $lastname,
        $firstname,
        $country,
        $address,
        $building_floor,
        $city,
        $postcode,
        $phone,
        $birth_date
    ));
    if(!$response) echo "error 500";
    
}