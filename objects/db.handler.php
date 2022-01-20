<?php
//this will inherited by everyone in mvc model
//this have session, and default timezone
require_once dirname(__DIR__).'/utils/util.php';

//only available nurse at the moment 
$_SESSION['nurse'] = "nurse-san";