<?php
include_once("model/model.php");

class controller extends model
{
    public $base_url = "";
    public function __construct()

    {
        parent::__construct();
        $ArrOfReq = explode("/", $_SERVER['REQUEST_URI']);

        $this->base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . $ArrOfReq[1] . "/" . $ArrOfReq[2];

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/form':
                    include_once("view/form.php");
                    if (isset($_POST['submit'])) {
                        $insertalluserdata = array(
                            "username" => $_POST['username'],
                            "email" => $_POST['email'],
                            "mobile" => $_POST['mobile'],
                        );
                        // echo"<pre>";
                        // print_r($insertalluserdata);
                        // $FetchAllUsersData = $this->insert('user', $insertalluserdata);
                        $fachdata = $this->insert('user', $insertalluserdata);
                        // echo "<pre>";
                        // print_r($FetchAllUsersData); 
                        if ($fachdata['code'] == 1) {
                            echo "insert";
                        } else {
                            echo "error";
                        }
                    }
                    break;
                case '/alluser';

                    $fachdata = $this->select('user');
                    // echo"<pre>";
                    // print_r($fachdata);
                    include_once("view/alluser.php");
                    break;
                case '/edituser';

                    $userdatabyid = $this->select('user', array('id' => $_GET['userid']));
                    include_once("view/edituser.php");
                    // echo"<pre>";
                    // print_r($userdatabyid);
                    if (isset($_REQUEST['update'])) {
                        array_pop($_POST);
                        // $userdata =
                        echo "<pre>";
                        print_r($_POST);
                        $updatewhere = array("id" => $_REQUEST['userid']);
                        $updateres = $this->update('user', $_POST, $updatewhere);
                        if ($updateres['code'] == 1) {
                            header("location:alluser");
                        } else {
                            echo "<script> alert('Error!!!')</script>";
                        }
                    }
                    // $userdata = array(
                    //     "username" => $_POST['username'],
                    //     "email" => $_POST['email'],
                    //     "mobile" => $_POST['mobile'],
                    // );
                    // echo"<pre>"; 
                    // print_r($updateres);
                    break;

                case '/deleteuser';
                    echo "<pre>";
                    print_r($_REQUEST);
                    print_r($_GET);
                    $fachdata = $this->delete('user',array("id" =>$_GET['userid']));
                    header("location:alluser");
                    break;

                default:
                    # code...
                    break;
            }
        } else {
            header("location:form");
        }
    }
}

$controller = new controller;
