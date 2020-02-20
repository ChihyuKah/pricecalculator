<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
session_start();

//include all your model files here
require 'Model/User.php';
require 'Model/Customers.php';
require 'Model/Products.php';
require 'Model/Groups.php';
//include all your controllers here
require 'Controller/HomepageController.php';

$userIndex = new User();


if(isset($_SESSION)){
//if($_SESSION["products"] == null &&  $_SESSION["customers"] == null){
    $_SESSION["products"] =$userIndex->getAllProducts();
    $_SESSION["customers"] =$userIndex->getAllCustomers();
    $_SESSION["groups"] =$userIndex->getAllGroups();
}

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code
$controller = new HomepageController();
$controller->postIsset();


