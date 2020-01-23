<?php

spl_autoload_register( function ($className){
    include 'libraries/'. $className. '.php';
});

//load required libraries
//require_once 'libraries/Core.php';
//require_once 'libraries/Text.php';
//require_once 'libraries/ColorText.php';
//require_once 'libraries/Controller.php';
require_once 'config/constants.php';