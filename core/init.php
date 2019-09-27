<?php
//Start Session;
session_start();

//Include Configurations
require_once('config/config.php');

//Helper functions Files
require_once("helpers/system_helper.php");
require_once("helpers/format_helper.php");
require_once("helpers/db_helper.php");

//Autoload classes
spl_autoload_register(function ($class_name) {
    require_once('libraries/' . $class_name . '.php');
});