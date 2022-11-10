<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js "></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <section class="locations-1" id="locations">
        <style>
            input[type="radio"],
            input[type="checkbox"] {
                -webkit-appearance: auto;
                outline: auto;
            }
        </style>
        <div class="locations py-5">
            <!-- test -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="card">
                            <div class="card-header text-center">
                                Registration
                            </div>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col">
                                            <label class="md-3">User name</label>
                                            <input type="text" onblur="checkreq(this,'usernameerror')" placeholder="Enter User Name" class="form-control" name="username" id="username">
                                            <span id="usernameerror"></span>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label class="md-3">Full name</label>
                                            <input type="text" onblur="checkreq(this,'userpasserror')" placeholder="Enter you full name" class="form-control" name="fullname" id="fullname">
                                            <span id="userpasserror"></span>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label class="md-3">Email</label>
                                            <input type="email" onblur="checkreq(this,'emailerror')" placeholder="Enter Email" class="form-control" name="email" id="email">
                                            <span id="emailerror"></span>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label class="md-3">Mobile No.</label>
                                            <input type="tel" onblur="checkreq(this,'mobileerror')" placeholder="Enter Mobile" class="form-control" name="mobile" id="mobile">
                                            <span id="mobileerror"></span>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <input type="radio" name="gender" value="Male" id="male"> <label for="male"> Male</label>
                                            <input type="radio" name="gender" value="Female" id="female"> <label for="female"> Female</label>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label class="md-3">hobbys</label><br>
                                            <input type="checkbox" name="hobby[]" value="gaming" id="gaming"> <label for="gaming"> gaming</label>
                                            <input type="checkbox" name="hobby[]" value="reding" id="reding"> <label for="reding"> reding</label>
                                            <input type="checkbox" name="hobby[]" value="cricket" id="cricket"> <label for="cricket"> cricket</label>

                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label class="md-3">select city</label><br>
                                            <select name="city" id="city" class="form-control">
                                                <option value="">-----select city-------</option>
                                                <option value="ahmdabad">ahmdabad</option>
                                                <option value="surat">surat</option>
                                                <option value="baroda">baroda</option>
                                                <option value="rajkot">rajkot</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col">
                                            <label class="md-3">password</label>
                                            <input type="password" placeholder="Enter Password" class="form-control" name="password" id="password">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col text-center">
                                            <input type="submit" class="btn btn-primary" name="registraion" id="registraion">
                                            <input type="reset" class="btn btn-danger">
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('email').addEventListener("keyup",function(){
            var RegX = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
            if (RegX.test(this.value)) {
                console.log("inside if");
                document.getElementById("emailerror").innerHTML=""
            }else{
                console.log("inside else");
                document.getElementById("emailerror").innerHTML="invalid formet!!"
            }
        }
        )
        document.getElementById('mobile').addEventListener("keyup",function(){
            var RegX = /^([0-9]{10})$/

            if (RegX.test(this.value)) {
                console.log("inside if");
                document.getElementById("mobileerror").innerHTML=""
            }else{
                console.log("inside else");
                document.getElementById("mobileerror").innerHTML="invalid formet!!"
            }
        }
        )
        function checkreq(e, spn) {
            // uname = document.getElementById("username").value 
            // console.log(uname);
            if (e.value == "") {
                document.getElementById(spn).innerHTML = "this filde is required !!"

                // console.log("this filed is required");
            } else {
                document.getElementById(spn).innerHTML = ""
                // console.log("done");
            }
        }

    </script>
</body>

</html>