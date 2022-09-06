<?php 

require_once Config::MODELS_FILE . '/Model.php';

class UserController extends Model{

    public function signUpPage(){
        include Config::MODELS_FILE . '/CountryModel.php';
        $title = 'Lassap - Inscription';
         $countryModel = new CountryModel();
         $african_continent = $countryModel->getAfricanCountry();
         $american_continent = $countryModel->getAmericanCountry();
         $asian_continent = $countryModel->getAsianCountry();
         $european_continent = $countryModel->getEuropeanCountry();
         $oceanian_continent = $countryModel->getOceanianCountry();
        
        include Functions::view('signup.html');
    }
    
    public function creatUser_handler(){
        if(
            !empty($_POST['email_address']) && !empty($_POST['password'])
        && !empty($_POST['lastname']) && !empty($_POST['firstname'])
        && !empty($_POST['country']) && !empty($_POST['address'])
        && !empty($_POST['city']) && !empty($_POST['postcode'])
        && is_numeric($_POST['postcode']) && !empty($_POST['phone'])
        && is_numeric($_POST['phone']) && !empty($_POST['birth_date'])
        && !empty($_POST['building_floor']) || $_POST['building_floor'] == null ){
    
        include Config::MODELS_FILE . '/userModel.php';
    
        $insert_user = new UserModel;
        $insert_user->insertUser($_POST['email_address'], $_POST['password'], $_POST['lastname'], $_POST['firstname'], $_POST['country'], $_POST['address'] , $_POST['building_floor'], $_POST['city'], $_POST['postcode'], $_POST['phone'], $_POST['birth_date']);
    
        Functions::redirection('accueil');
    
    
        }else{
            echo "error userController";
        }
    }
}
