<section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
            <div class="container pt-lg-5 py-3">
            </div>
        </div>
    </section>
    <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="home">Home</a></li>
                <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> <?php echo ltrim($_SERVER['PATH_INFO'], "/". $ArrOfReq[1]);  ?></li>
                <!-- <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> </li> -->
            </ul>
        </div>
    </section>