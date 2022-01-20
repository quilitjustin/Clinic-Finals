<?php

require_once dirname(__DIR__).'/objects/control.php';
require_once 'validation.php';

class Register extends Control{
    use Validation;
    //validation are all private, and this will be thrown to a protected function
    //so i think this didn't violate any rules
    public function signUp(){
        $name = $this->properFormat($_POST['name']); 
        $address = $this->properFormat($_POST['address']);
        $age = $this->properAge($_POST['age']);
        $gender = $this->validateGender($_POST['gender']);
        $user = array(
            "name" => $name,
            "address" => $address,
            "age" => $age,
            "gender" => $gender
        );
        $this->setUser($user);
    }
}

$register = new Register;
$register->signUp();