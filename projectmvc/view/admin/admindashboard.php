<?php
if (isset($_SESSION['UserData'])) {
    if ($_SESSION['UserData']->roll_id != 1) {
        header("location:home"); 
    }
}
if (!isset($_SESSION['UserData'])) {
    header("location:login");
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Campus Recruitment</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <!-- Choices.js-->
    <link rel="stylesheet" href="<?php echo $this->base_url_assets; ?>admin/choices.js/public/assets/styles/choices.min.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo $this->base_url_assets; ?>admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo $this->base_url_assets; ?>admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo $this->base_url_assets; ?>admin/img/favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10">
            <div class="search-panel">
                <div class="search-inner d-flex align-items-center justify-content-center">
                    <div class="close-btn d-flex align-items-center position-absolute top-0 end-0 me-4 mt-2 cursor-pointer"><span>Close </span>
                        <svg class="svg-icon svg-icon-md svg-icon-heavy text-gray-700 mt-1">
                            <use xlink:href="#close-1"> </use>
                        </svg>
                    </div>
                    <div class="row w-100">
                        <div class="col-lg-8 mx-auto">
                            <form class="px-4" id="searchForm" action="#">
                                <div class="input-group position-relative flex-column flex-lg-row flex-nowrap">
                                    <input class="form-control shadow-0 bg-none px-0 w-100" type="search" name="search" placeholder="What are you searching for...">
                                    <button class="btn btn-link text-gray-600 px-0 text-decoration-none fw-bold cursor-pointer text-center" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center justify-content-between py-1">
                <div class="navbar-header d-flex align-items-center"><a class="navbar-brand text-uppercase text-reset" href="admindashboard">
                        <div class="brand-text brand-big"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
                        <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div>
                    </a>
                    <button class="sidebar-toggle">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy transform-none">
                            <use xlink:href="#arrow-left-1"> </use>
                        </svg>
                    </button>
                </div>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a class="search-open nav-link px-0" href="#">
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy text-gray-700">
                                <use xlink:href="#find-1"> </use>
                            </svg></a></li>

                    <!-- Tasks dropdown-->
                    <li class="list-inline-item dropdown px-lg-2"><a class="nav-link text-reset px-1 px-lg-0" id="navbarDropdownMenuLink2" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                <use xlink:href="#paper-stack-1"> </use>
                            </svg><span class="badge bg-dash-color-3">9</span></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink2">
                            <li><a class="dropdown-item" href="#">
                                    <div class="d-flex justify-content-between mb-1"><strong>Task 1</strong><span>40% complete</span></div>
                                    <div class="progress" style="height: 2px">
                                        <div class="progress-bar bg-dash-color-1" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </a></li>
                            <li>
                        </ul>
                    </li>
                    <!-- Mega menu-->
                    <!-- Languages dropdown    -->
                    <li class="list-inline-item dropdown"><a class="nav-link dropdown-toggle text-sm text-reset px-1 px-lg-0" id="languages" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $this->base_url_assets; ?>admin/img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block ms-2">English</span></a>
                        <ul class="dropdown-menu dropdown-menu-end mt-sm-3 dropdown-menu-dark" aria-labelledby="languages">
                            <li><a class="dropdown-item" rel="nofollow" href="#"> <img class="me-2" src="<?php echo $this->base_url_assets; ?>admin/img/flags/16/DE.png" alt="English"><span>German</span></a></li>
                            <li><a class="dropdown-item" rel="nofollow" href="#"> <img class="me-2" src="<?php echo $this->base_url_assets; ?>admin/img/flags/16/FR.png" alt="English"><span>French </span></a></li>
                        </ul>
                    </li>

                    <li class="list-inline-item logout px-lg-2">
                        <a class="nav-link text-sm text-reset px-1 px-lg-0" id="logout" href="logout">
                            <span class="d-none d-sm-inline-block">Logout </span>
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                <use xlink:href="#disable-1"> </use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <nav id="sidebar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center p-4"><img class="avatar shadow-0 img-fluid rounded-circle" src="<?php echo $this->base_url_assets; ?>admin/img/avatar-6.jpg" alt="...">
                <div class="ms-3 title">
                    <h1 class="h5 mb-1">Mark Stephen</h1>
                    <p class="text-sm text-gray-700 mb-0 lh-1">Web Developer</p>
                </div>
            </div><span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Main</span>
            <ul class="list-unstyled">
                <li class="sidebar-item active"><a class="sidebar-link" href="admindashboard">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#real-estate-1"> </use>
                        </svg><span>Home </span></a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="tables.html">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#portfolio-grid-1"> </use>
                        </svg><span>Tables </span></a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="charts.html">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#sales-up-1"> </use>
                        </svg><span>Charts </span></a></li>
                <!-- <li class="sidebar-item"><a class="sidebar-link" href="addnewrequirement">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="addnewrequirement"> </use>
                        </svg><span>Forms </span></a></li> -->
                <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#browser-window-1"> </use>
                        </svg><span>About Recruitment</span></a>
                    <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                        <li><a class="sidebar-link" href="addnewusers">New Add</a></li>
                    </ul>
                </li>
                <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#browser-window-1"></use>
                        </svg><span>Users Details</span></a>
                    <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                        <li><a class="sidebar-link" href="allusers">View Users</a></li>
                    </ul>
                </li>
                <li class="sidebar-item"><a class="sidebar-link" href="login.html">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#disable-1"> </use>
                        </svg><span>Login page </span></a></li>
            </ul><span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Extras</span>

        </nav>

        <!-- JavaScript files-->
        <script src="<?php echo $this->base_url_assets; ?>admin/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo $this->base_url_assets; ?>admin/just-validate/js/just-validate.min.js"></script>
        <script src="<?php echo $this->base_url_assets; ?>admin/chart.js/Chart.min.js"></script>
        <script src="<?php echo $this->base_url_assets; ?>admin/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="<?php echo $this->base_url_assets; ?>admin/js/charts-home.js"></script>
        <!-- Main File-->
        <script src="<?php echo $this->base_url_assets; ?>admin/js/front.js"></script>
        <script>
            // ------------------------------------------------------- //
            //   Inject SVG Sprite - 
            //   see more here 
            //   https://css-tricks.com/ajaxing-svg-sprite/
            // ------------------------------------------------------ //
            function injectSvgSprite(path) {

                var ajax = new XMLHttpRequest();
                ajax.open("GET", path, true);
                ajax.send();
                ajax.onload = function(e) {
                    var div = document.createElement("div");
                    div.className = 'd-none';
                    div.innerHTML = ajax.responseText;
                    document.body.insertBefore(div, document.body.childNodes[0]);
                }
            }
            // this is set to BootstrapTemple website as you cannot 
            // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
            // while using file:// protocol
            // pls don't forget to change to your domain :)
            injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>