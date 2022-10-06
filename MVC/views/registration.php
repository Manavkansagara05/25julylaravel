<section class="locations-1" id="locations">
    <style>
        input[type="radio"],
        input[type="checkbox"] {
            -webkit-appearance: auto ;
            outline: auto ;
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
                                        <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="username">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                    <label class="md-3">Full name</label>
                                        <input type="text" placeholder="Enter you full name" class="form-control" name="fullname" id="fullname">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                    <label class="md-3">Email</label>
                                        <input type="email" placeholder="Enter Email" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                    <label class="md-3">Mobile No.</label>
                                        <input type="tel" placeholder="Enter Mobile" class="form-control" name="mobile" id="mobile">
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