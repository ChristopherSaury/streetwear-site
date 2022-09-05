<?php

require_once Config::MODELS_FILE . '/Model.php';


class UserModel extends Model{

    public function insertUser($email_address,$password,$lastname,$firstname,$country,$address, $building_floor = null,$city,$postcode,$phone,$birth_date){
        $request = "INSERT INTO `user` (
                email_address,
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
    
        $response = $this->prepareAndExecute($request , array(
            $email_address,
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
        if(!$response) echo "user model";
        
    }
}
