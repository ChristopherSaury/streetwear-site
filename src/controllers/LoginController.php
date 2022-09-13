<?php

class LoginController{
    public function loginPage(){
        $title = 'Lassap - Connexion';
        include Functions::view('login.html');
    }
    public function login_verification(){
        $error_form = [];
        if(empty($_POST['email_address'])){
            $error_form [] = 'email non renseigné';
            var_dump($error_form);
        }

        if(empty($_POST['password'])){
            $error_form [] = 'mot de passe non renseigné';
            var_dump($error_form);
        }

        if(empty($error_form)){
            return true;
        } 
    }

    public function login_handler(){
        
        $entry_verify = $this->login_verification();
        if(!empty($_POST['email_address']) && !empty($_POST['password'])){

            require Config::MODELS_FILE . '/LoginModel.php';
            $login_request = new LoginModel();

            $email = $_POST['email_address'];
            //$password = $_POST['password'];
            $email_check = $login_request->email_verify($email);
            
            if($email_check === false || $email_check === null){
                echo "Identifiant ou mot de passe incorrecte";
            }elseif($email){
                $check = password_verify($_POST['password'], $email_check->password);
                if($check){
                    $open_session = new Functions;
                    $open_session->init_session();
                    $_SESSION['firstname'] = $email_check->firstname;
                    $_SESSION['user_id'] = $email_check->id;
                    $_SESSION['error_form'] = [];
                    $open_session->redirection('accueil');
                    //var_dump($_SESSION);
                }elseif($check === false){
                    echo "Identifiant ou mot de passe incorrecte !!!";
                }
            }
        }
    }
}