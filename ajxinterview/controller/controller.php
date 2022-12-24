<?php

use controller as GlobalController;

include_once("model/model.php");


class controller extends model
{
    public $base_url = "";
    public function __construct()
    {
        parent::__construct();

        $ArrOfReq = explode("/", $_SERVER['REQUEST_URI']);
        $this->base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . $ArrOfReq[1] . "/" . $ArrOfReq[2];
        // echo"<pre>";
        // print_r($_SERVER);
        // exit;
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/ajx':
                    // $fetchdata = $this->select('product');

                    include_once("view/ajx.php");


                    break;
                case '/selectcategory':
                    // echo "called select cate";
                    $selectcategory = $this->select('category');
                    echo json_encode($selectcategory);
                    // echo"<pre>";
                    // print_r($selectcategory);
                    break;


                    // case '/selectproductdata':
                    //     $fetchdata = $this->select('product');
                    //     echo json_encode($fetchdata);
                    //     break;

                case '/selectproductdata':
                    $fetchdata = $this->select_join(
                        'product',
                        array(
                            "category" => "product.category=category.category_name",
                        )
                    );
                    echo json_encode($fetchdata);
                    break;

                case '/saveproductdata':
                    $data = $this->insertproduct($_POST);
                    // echo json_encode($data);
                    break;

                case '/editproduct':
                    $data = $this->editproduct($_POST);
                    echo json_encode($data);

                    break;
                case '/updateproduct':
                    $data = $this->updatedata($_POST);
                    // echo json_encode($data);

                    break;
                case '/deleteproduct':
                    $data = $this->deletedata($_POST);
                    // echo json_encode($data);

                    break;
                default:

                    break;
            }
        } else {
            header("location:ajx");
        }
    }
}

$controller = new Controller;
