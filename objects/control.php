<?php

require_once 'model.php';

class Control extends Model{
    protected function setUser($user){
        $this->saveUser($user);
    }
    protected function setConReq($consult){
        $this->saveConReq($consult);
    }
}