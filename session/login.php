<?php
include('heder.php');

if (isset($_POST['username'])) {

    if (($_POST['username'] == $_COOKIE['username'] ||$_POST['username'] == $_COOKIE['email']||$_POST['username'] == $_COOKIE['phone'] ) &&
     $_POST['password'] == $_COOKIE['password']) {

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['userdata'] = array("uname" => $_POST['username'], "pass" => $_POST['password']);
        header("location:dashboard.php");
    } else {
        echo "invalid user ";
    }
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
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-mb-4 offset-md-4 text-center">

                <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                    <div class="card-header">login page</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mt-3">
                                <input placeholder="enter user name" type="text" name="username" class="form-control" id="username">

                            </div>
                            <div class=" mt-3 ">
                                <input placeholder=" enter password" type="password" name="password" class="form-control" id="password">

                            </div class=" mt-3">
                            <input type="submit" name=" btn-login " class="btn btn-primry" value="login ">
                            <input type="reset" class="btn btn-danger" value="reset">
                        </form>
                    </div>
                    <div class="card-footer py-3 ">
                        <div class="text-center">
                            don't have an account <a href="ragister.php" class="text-dark">create one </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>