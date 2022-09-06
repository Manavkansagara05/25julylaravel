<?php
include('heder.php');

if (!isset($_SESSION['cartitem'])) {

    echo " <h3>sorry no items add </h3>";
} else {
    if (isset($_POST['emptycart'])) {
        unset($_SESSION['cartitem']);
        header("location:cart.php");
    }
}
?>
<li><?php if (isset($_SESSION['cartitem']['firstname'])) {

        echo $_SESSION['cartitem']['firstname'];
    } ?> </li>

<li><?php if (isset($_SESSION['cartitem']['lastname'])) {
        echo $_SESSION['cartitem']['lastname'];
    } ?> </li>


<li><?php if (isset($_SESSION['cartitem']['usernumber'] )) {
        echo $_SESSION['cartitem']['usernumber'];;
    } ?> </li>

<form method="POST">

    <div class="btn mt-4 ">
        <input type="submit" name="emptycart" id="emptycart" class="btn btn-danger" value="empty cart">

    </div>
</form>