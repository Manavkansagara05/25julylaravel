<?php
include('heder.php');

if (isset($_POST['btn-add-to-cart'])) { 

   $_SESSION['cartitem']= [ "firstname"=>$_POST['firstname'], "lastname"=>$_POST['lastname'], "usernumber"=>$_POST['usernumber']];
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>user details </h1>
            <form method="post">

                <div class=" row1 mt-4">
                    <input placeholder="First name" type="text" name="firstname" id="firstname">
                </div>
                <div class=" row3 mt-4">
                    <input placeholder="Last name" type="text" name="lastname" id="lastname">
                </div>
                <div class=" row2 mt-4">
                    <input placeholder="age" type="number" name="usernumber" id="usernumber">
                </div>

                <div class="btn mt-4 ">

                    <input type="submit" name="btn-add-to-cart" class="btn btn-success" value="add to cart">

                    <a href="viewcart.php" class="text-decoration-none btn btn-primary text-white">view add cart</a>

                </div>



            </form>
        </div>
    </div>
</body>

</html>