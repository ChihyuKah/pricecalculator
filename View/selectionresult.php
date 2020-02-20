<?php
declare(strict_types=1);
session_start();
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require '../Model/User.php';
require '../Model/Customers.php';
require '../Model/Products.php';
require '../Model/Groups.php';

require '../Controller/SelectionResultController.php';

$controller = new SelectionResultController();
//$controller->getRequire();
/*function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}
whatIsHappening();*/


ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
/*
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

whatIsHappening();*/


$customerID = $_SESSION['customerID'];
$productsID = $_SESSION['productID'];


//static::$allProductsNames = new  Products();

$allProductsNames = new  Products();

$_SESSION['objectProduct'] = $allProductsNames;

$allCustomerNames = new  Customers();

$_SESSION['objectCustomer'] = $allCustomerNames;




?>

<!doctype html>
<html  lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php require 'includes/header.php'?>
<!-- print product-->
<?php

$allProductsNames->setName($productsID);
$allProductsNames->setAllProductsArray( $_SESSION["products"]);
$controller->getSelectProduct($allProductsNames->getName() ,$allProductsNames->getAllProductsArray() );

echo $allProductsNames->getName()."<br/>";
echo $allProductsNames->getPrice()."<br/>";
echo $allProductsNames->getDescription()."<br/>";

//echo $allProductsNames->getAllProductsArray()[$foundProduct]->name ."<br/>" . $allProductsNames->getAllProductsArray()[$foundProduct]->description ."<br/>" . $allProductsNames->getAllProductsArray()[$foundProduct]->price ."<br/>";

?>
<!-- print customers-->
<?php echo " customer". $customerID ."<br/>" ;

$allCustomerNames->setName($customerID);
$allCustomerNames->setAllCustomersArray( $_SESSION["customers"]);

$foundCustomer = $controller->getCustomerGroubID($allCustomerNames->getName() ,$allCustomerNames->getAllCustomersArray() );
$allCustomerNames->setGroupId($allCustomerNames->getAllCustomersArray()[$foundCustomer]->group_id );

$controller->countDiscount( $allCustomerNames->getGroupId(), $_SESSION["groups"]);

$resultArray = $controller->getResultArray();
var_dump($resultArray);

foreach ($resultArray as $value){
    echo $value['name'].'<br/>'. $value['discount'].'<br/>'."--------------------".'<br/>';
}
$keyResult = null;

for ($i=0 ; $i<count($resultArray) ; $i++){

    if ($i == 0) {
        $min = $temp = $resultArray[$i]['discount'];
        $keyResult = $i;
    }
    if ($i > 0) {
        if ($resultArray[$i]['discount'] < $temp) {
            $min = $resultArray[$i]['discount'];
            $keyResult = $i;
        }
    }
}

echo '<br/>'.' the min value is = ' . $resultArray[$keyResult]['discount'] . ' for the ' . $resultArray[$keyResult]['name'] ;
//$anything=  min($resultArray['discount']);
//var_dump($anything);
//min($resultArray);
/*$allGroup->setId($allCustomerNames->getGroupId());
$controller->getGroupId($allGroup->getId(),$_SESSION["groups"] );*/
//echo  ;
?>
<?php require 'includes/footer.php'?>
</body>
</html>
