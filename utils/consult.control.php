<?php

require_once dirname(__DIR__).'/objects/control.php';
require_once 'validation.php';

class Consultation extends Control{
    use Validation;
    public function conReq(){
        $consult = array(
            "nurse" => $this->properFormat($_SESSION['nurse']),
            "name" => $this->properFormat($_SESSION['user']['name']),
            "address" => $this->properFormat($_SESSION['user']['address']),
            "age" => $this->properAge($_SESSION['user']['age']),
            "gender" => $this->validateGender($this->properFormat($_SESSION['user']['gender']))
        );
        $this->setConReq($consult);
    }
}

$consult = new Consultation;
$consult->conReq();