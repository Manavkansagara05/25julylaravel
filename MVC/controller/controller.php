<?php
session_start();
include_once("model/model.php");

class Controller extends Model
{

    public $base_url = "";
    public function __construct()
    {
        ob_start();
        parent::__construct();

        $ArrOfReq = explode("/", $_SERVER['REQUEST_URI']);

        $this->base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . $ArrOfReq[1] . "/" . $ArrOfReq[2];
        $this->base_url_assets = $this->base_url . "/assets/";

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("views/header.php");
                    include_once("views/maincontent.php");
                    include_once("views/footer.php");
                    break;

                case '/login':
                    include_once("views/headersubpages.php");
                    include_once("views/breadcrumbs.php");
                    include_once("views/loginpage.php");
                    include_once("views/footer.php");
                    if (isset($_POST['login'])) {

                        if ($_POST['username'] != "" && ($_POST['password']) != "") {
                            $logindata = $this->login($_POST['username'], $_POST['password']);
                            if ($logindata['code'] == 1) {
                                // echo "<pre>";
                                // print_r($logindata); 
                                $_SESSION['userdata'] = $logindata['Data'][0];
                                if ($logindata['Data'][0]->roll_id == 1) {
                                    header("location:admin");
                                } else {
                                    header("location:home");
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
                    include_once("views/headersubpages.php");
                    include_once("views/breadcrumbs.php");
                    include_once("views/registration.php");
                    include_once("views/footer.php");
                    if (isset($_POST['registraion'])) {
                        $hobby = implode(',', $_POST['hobby']);
                        // $insertalluserdata = array(
                        //     "user_name" => $_POST['username'],
                        //     "password" => $_POST['password'],
                        //     "fullname" => $_POST['fullname'],   
                        //     "email" => $_POST['email'],
                        //     "mobile" => $_POST['mobile'],
                        //     "gender" => $_POST['gender'],
                        //     "hobby" => $hobs,
                        //     "city" => $_POST['city']);
                        //      echo "<pre>";
                        // print_r($insertalluserdata);
                        array_pop($_POST);
                        unset($_POST['hobby']);
                        $insertarray = array_merge($_POST, array("hobby" => $hobby));
                        // echo "<pre>";
                        // print_r($insertarray);

                        $FetchAllUsersData = $this->insert('user', $insertarray);
                        // echo "<pre>";
                        // print_r($FetchAllUsersData);
                        if ($FetchAllUsersData['code'] == 1) {
                            header("location:login");
                        } else {
                            echo "error";
                        }
                    }
                    break;
                case '/showallusers':
                    echo "showallusers";
                    echo "<pre>";
                    $FetchAllUsersData = $this->select('user');
                    print_r($FetchAllUsersData);

                    break;
                case '/admin':

                    include_once("views/admin/header.php");
                    include_once("views/admin/dashboard.php");
                    include_once("views/admin/footer.php");

                    break;
                case '/allusers':
                    $FetchAllUsersData = $this->select('user', array("roll_id" => 2, "status" => 1));
                    // $FetchAllUsersData = $this->select('user');
                    include_once("views/admin/header.php");
                    include_once("views/admin/allusers.php");
                    include_once("views/admin/footer.php");
                    break;


                case '/addnewuser':
                    include_once("views/admin/header.php");
                    include_once("views/admin/addnewuser.php");
                    include_once("views/admin/footer.php");
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
                    $countriesdata = $this->select('countries');
                    $statesdata = $this->select('states');
                    $citiesdata = $this->select('cities');

                    include_once("views/admin/header.php");
                    include_once("views/admin/edit.php");
                    include_once("views/admin/footer.php");

                    if (isset($_REQUEST['update'])) {
                        $hobby = implode(",", $_POST['hobby']);
                        // // echo"<pre>";
                        // echo "<pre>";
                        // print_r($_REQUEST); 
                        array_pop($_POST);
                        unset($_POST['hobby']);
                        unset($_POST['Country']);
                        unset($_POST['State']);
                        $updatedata = array(
                            "username" => $_POST['username'],
                            "fullname" => $_POST['fullname'],
                            "email" => $_POST['email'],
                            "mobile" => $_POST['mobile'],
                            "gender" => $_POST['gender'],
                            "hobby" => $hobby,
                            "city" => $_POST['city'],
                            "country" => $_POST['country'],
                            "state" => $_POST['state']
                        );
                        // print_r($updatedata);
                        // echo "</pre>";
                        // exit;
                        $updatewhere = array("id" => $_REQUEST['userid']);
                        if (isset($_FILES['prof_pic'])) {
                            if ($_FILES['prof_pic']['error'] == 0) {
                                if ($_FILES['prof_pic']['size'] < 5999999) {
                                    $tmp_name = $_FILES['prof_pic']['tmp_name'];
                                    $file_name = $_FILES['prof_pic']['name'];
                                    move_uploaded_file($tmp_name, "uploads/$file_name");
                                } else {
                                    $file_name = "default.jpg";
                                }
                            } else {
                                $file_name = "default.jpg";
                            }
                        } else {
                            $file_name = "default.jpg";
                        }
                        $updatedata = array_merge($_POST, array("hobby" => $hobby, "prof_pic" => $file_name));
                        $updateRes = $this->update('user', $updatedata, $updatewhere);
                        if ($updateRes['code']==1) {
                            header("location:allusers");  
                        } else {
                            echo "<script> alert('Error!!!')</script>";
                        }
                        
                    }
                    break;

                case '/logout':
                    session_destroy();
                    header("location:home");

                    break;
                case '/deleteuser':
                    echo "<pre>";
                    print_r($_REQUEST);
                    print_r($_GET);
                    $FetchAllUsersData = $this->delete('user', array("id" => $_GET['userid'], "status" => 1));
                    header("location:allusers");


                    break;
                default:
                    # code...
                    break;
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
}

$Controller = new Controller;
