<?php

require_once dirname(__DIR__).'/objects/control.php';
require_once 'validation.php';

class Consultation extends Control{
    use Validation;
    public function conReq(){
        $consult = array(
            "nurse" => properFormat($_SESSION['nurse']),
            "name" => properFormat($_SESSION['user']['name']),
            "address" => properFormat($_SESSION['user']['address']),
            "age" => properAge($_SESSION['user']['age']),
            "gender" => validateGender(properFormat($_SESSION['user']['gender']))
        );
        $this->setConReq($consult);
    }
}

$consult = new Consultation;
$consult->conReq();