<?php
session_start();
include_once("model/model.php");

class Controller extends Model
{

    public function __construct()

    {
        ob_start();
        parent::__construct();
        // echo "<pre>";
        // print_r($_SERVER);
        $ArrOfReq = explode("/", $_SERVER['REQUEST_URI']);

        $this->base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . $ArrOfReq[1] . "/" . $ArrOfReq[2];
        $this->base_url_assets = $this->base_url . "/assets/";
        // print_r(  $this->base_url_assets);

        // exit;

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("view/header.php");
                    include_once("view/maincontent.php");
                    include_once("view/footer.php");
                    break;

                case '/about':

                    include_once("view/header.php");
                    include_once("view/breadcrumb.php");
                    include_once("view/about.php");
                    include_once("view/footer.php");
                    break;

                case '/services':

                    include_once("view/header.php");
                    include_once("view/breadcrumb.php");
                    include_once("view/services.php");
                    include_once("view/footer.php");
                    break;

                case '/Contact':

                    include_once("view/header.php");
                    include_once("view/breadcrumb.php");
                    include_once("view/Contact.php");
                    include_once("view/footer.php");
                    break;

                case '/bookride':
                    include_once("view/header.php");
                    include_once("view/breadcrumb.php");
                    include_once("view/bookride.php");
                    include_once("view/footer.php");
                    if (isset($_POST['book'])) {
                        $insertalluserdata = array(
                            "fullname" => $_POST['fullname'],
                            "city" => $_POST['city'],
                            "pick_up" => $_POST['pick_up'],
                            "drop" => $_POST['drop'],
                            "pikup_date" => $_POST['pikup_date'],
                            "drop_date" => $_POST['drop_date'],
                            "pick_uptime" => $_POST['pick_uptime']
                        );
                        // array_pop($_POST);
                        // $insertarray = $_POST ;
                        // echo "<pre>";
                        // print_r($insertarray);
                        $FetchAllUsersData = $this->insert('bookride', $insertalluserdata);
                        if ($FetchAllUsersData['code'] == 1) {
                            header("location:bookride");
                        } else {
                            echo "error";
                        }
                    }
                    break;

                case '/login':
                    include_once("view/header.php");
                    include_once("view/breadcrumb.php");
                    include_once("view/login.php");
                    include_once("view/footer.php");

                    if (isset($_POST['login'])) {
                        if ($_POST['username'] != "" && ($_POST['password']) != "") {
                            $logindata = $this->login($_POST['username'], $_POST['password']);
                            if ($logindata['code'] == 1) {
                                $_SESSION['UserData'] = $logindata['Data'][0];
                                if ($logindata['Data'][0]->roll_id == 1) {
                                    header("location:admin");
                                    // echo("in if");
                                } else {
                                    header("location:home");
                                    // echo("in else");
                                }
                            } else {
                                echo "<script> alert('invalid user !!!')</script>";
                            }
                        } else {
                            echo "<script> alert('username and password is requird !!!')</script>";
                        }
                    }
                    break;

                case '/registration':
                    include_once("view/header.php");
                    include_once("view/breadcrumb.php");
                    include_once("view/registration.php");
                    include_once("view/footer.php");

                    if (isset($_POST['registraion'])) {
                        $hobby = implode(',', $_POST['hobby']);
                        array_pop($_POST);
                        unset($_POST['hobby']);
                        $insertarray = array_merge($_POST, array("hobby" => $hobby));
                        // echo "<pre>";
                        // print_r($insertarray);

                        $FetchAllUsersData = $this->insert('user', $insertarray);
                        // echo "<pre>";
                        // print_r($$FetchAllUsersData['code'] );
                        if ($FetchAllUsersData['code'] == 1) {
                            header("Location:login");
                        } else {
                            echo "error";
                        }
                    }
                    break;

                case '/admin':
                    include_once("view/admin/admindashboard.php");
                    include_once("view/admin/template.php");
                    break;

                case '/allusers':
                    $FetchAllUsersData = $this->select('user', array("roll_id" => 2, "status" => 1));

                    // echo "<pre>";
                    // print_r($FetchAllUsersData); 
                    // exit;
                    include_once("view/admin/admindashboard.php");
                    include_once("view/admin/allusers.php");
                    break;

                case '/addnewusers':

                    include_once("view/admin/admindashboard.php");
                    include_once("view/admin/addnewuser.php");
                    if (isset($_POST['submit'])) {
                        $hobby = implode(',', $_POST['hobby']);
                        array_pop($_POST);
                        unset($_POST['hobby']);
                        $insertarray = array_merge($_POST, array("hobby" => $hobby));
                        // echo "<pre>";
                        // print_r($insertarray)
                        $FetchAllUsersData = $this->insert('user', $insertarray);
                        // echo "<pre>";
                        // print_r($FetchAllUsersData);
                        if ($FetchAllUsersData['code'] == 1) {
                            echo "<script> alert('new user added successfully!!!')</script>";
                            header("location:allusers");
                        } else {
                            echo "error";
                        }
                    }
                    break;

                case '/edituser':
                    // echo "<pre>";
                    // print_r($_GET); 
                    $UsersDataById = $this->select('user', array("id" => $_GET['userid'], "status" => 1));
                    include_once("view/admin/admindashboard.php");
                    include_once("view/admin/edituser.php");
                    break;

                case '/deleteuser':
                    echo "<pre>";
                    print_r($_REQUEST);
                    print_r($_GET);
                    $FetchAllUsersData = $this->delete('user', array("id" => $_GET['userid'], "status" => 1));
                    header("location:allusers");
                    break;


                case '/logout':
                    session_destroy();
                    header("location:home");
                    break;
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
}

$Controller = new Controller;
