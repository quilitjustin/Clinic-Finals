<?php

require_once 'db.handler.php';

class Model{
    protected function saveUser($user){
        $_SESSION['user'] = $user;
        //successful sign up, now the user already log in
        $_SESSION['auth'] = true;
        header("Location: ../files/dashboard.php");
        die();
    }
    private function existingReq(){
        header("Location: ../files/dashboard.php?alert=<script>alert('Current request exist already! Pls try again later~')</script>");
        die();
    }
    protected function saveConReq($consult){
        if(isset($_SESSION['conReq'])){
            $this->existingReq();
        }
        $date = date('d-m-Y H:i:s');
        $date = date('d-m-Y H:i:s' ,strtotime($date) + 20);
        //when will the consultation request expire
        $_SESSION['conExpireReq'] = $date;
        //add the date and time when will it expire for viewing
        $consult['date'] = $date; 
        $_SESSION['conReq'] = $consult;
        header("Location: ../files/dashboard.php?alert=<script>alert('Hello! Your request would expire within 20 seconds~ Timezone is Asia/Manila so there may be time difference from your clock and the appointment time that will appear. Pls refresh the page if you want to see the record disappear after 20 seconds. Thank you!')</script>");
        die();
    }
    private function reqExpire(){
        unset($_SESSION['conExpireReq']);
        unset($_SESSION['conReq']);
        header("Location: ../files/dashboard.php");
        die();
    }
    protected function getViewReq(){
        if(isset($_SESSION['conReq'])){
            if(date('d-m-Y H:i:s') > $_SESSION['conExpireReq']){
               $this->reqExpire(); 
            }
            return array($_SESSION['conReq']);
        }
    }
}