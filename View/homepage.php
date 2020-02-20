<?php
declare(strict_types=1);


ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);



//$allNames = new  HomepageController();
$allProductsNames = new  Products();
$allCustomerNames = new  Customers();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>MVC</title>
</head>
<body>

<?php require 'includes/header.php' ?>


<form method="post">

    <button type="submit" name="submit">Submit</button>


    <div class="row">

        <div class="col-4 bg-info">
            <div class="dropdown">
                <p> Select your customer</p>
                <select name="Customer" id="selectCustomer">
                    <option value='Not Available'>Customers Name</option>
                    <?php

                    $allCustomerNames->setAllCustomersArray($_SESSION["customers"]);
                    $forForeacchCustomers =$allCustomerNames->getAllCustomersArray();

                    foreach ( $forForeacchCustomers as $key => $name) {
                        echo ' <option value="' . $name->name . '"  id= "' . $key . '" > ' . $name->name . '</option>';
                    }

                    ?>
                </select>
                <p id="resultCustomer"></p>
            </div>
        </div>

        <div class="col-4 bg-info">
            <div class="dropdown">
                <p> Select your products</p>
                <select name="Product" id="selectProduct">
                    <option value='Not Available'>Products Name</option>

                    <?php

                    $allProductsNames->setAllProductsArray($_SESSION["products"]);
                    $forForeacchProducts =$allProductsNames->getAllProductsArray();

                    foreach ( $forForeacchProducts as $key => $name) {
                        echo ' <option value="' . $name->name . '"  id= "' . $key . '" > ' . $name->name . '</option>';
                    }

                    ?>

                </select>
                <p id="resultProduct"></p>
            </div>
        </div>

    </div>

</form>


<?php require 'includes/footer.php' ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>

