<?php

require_once dirname(__DIR__).'/objects/control.php';

class Consultation extends Control{
    public function conReq(){
        $consult = array(
            "nurse" => $_SESSION['nurse'],
            "name" => $_SESSION['user']['name'],
            "address" => $_SESSION['user']['address'],
            "age" => $_SESSION['user']['age'],
            "gender" => $_SESSION['user']['gender']
        );
        $this->setConReq($consult);
    }
}

$consult = new Consultation;
$consult->conReq();