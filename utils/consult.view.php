<?php

require_once dirname(__DIR__).'/objects/view.php';

class Consultation extends View{
    public function viewConReq(){
        return $this->setViewConReq();
    }
}

//view consultation request
$viewCon = new Consultation;
$conReqRecords = $viewCon->viewConReq();
