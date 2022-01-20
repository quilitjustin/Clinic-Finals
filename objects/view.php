<?php

require_once 'model.php';

class View extends Model{
    protected function setViewConReq(){
        return $this->getViewReq();
    }
}