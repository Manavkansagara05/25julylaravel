<?php
class Controller
{

    public function __construct()
    {
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

                case '/login':

                    include_once("view/header.php");
                    include_once("view/breadcrumb.php");
                    include_once("view/login.php");
                    include_once("view/footer.php");
                    break;
                    
                    case '/registration':

                        include_once("view/header.php");
                        include_once("view/breadcrumb.php");
                        include_once("view/registration.php");
                        include_once("view/footer.php");
                        break;
            }
        }
    }
}

$Controller = new Controller;
