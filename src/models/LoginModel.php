<?php

require_once Config::MODELS_FILE . '/Model.php';

class LoginModel extends Model{
    public function email_verify($email){
        $request = "SELECT * FROM `user` WHERE email_address = :email;";
        $response = $this->db->prepare($request);
        $response->bindParam(":email", $email);
        $response->execute();

        if(!$response){
            echo "error 404 not found";
        }
        return $response->fetch();
    }
}