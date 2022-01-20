<?php

trait Validation{
    //always redirect to index 
    //if already logged in the index will redirect them to dashboard
    //chances of happening is small unless the user do something mischief
    private function validateGender($gender){
        $gender = $this->properFormat($gender);
        if(!in_array($gender, ['Male', 'Female'])){
            header("Location: ../index.php?msg=<h3 class='text-danger'>Male or Female Only!</h3>");
            die();
        }
        return $gender;
    }
    private function isEmpty($data){
            if(empty($data)){
            header("Location: ../index.php?msg=<h3 class='text-danger'>Wrong Input!</h3>");
            die();
        }
    }
    private function properAge($age){
        $age = $this->isInt($age);
        //Only 1 yrs old above only 
        if($age <= 0){
            header("Location: ../index.php?msg=<h3 class='text-danger'>Wrong Age!</h3>");
            die();
        }
        return $age; 
    }
    private function isInt($integer){
        $this->isEmpty($integer);
        if(!is_numeric($integer)){
            header("Location: ../index.php?msg=<h3 class='text-danger'>Wrong Input!</h3>");
            die();
        }
        return $integer;
    }
    private function properFormat($str){
        $this->isEmpty($str);
        return ucwords(strtolower($str));
    }
}