<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<div id="page-wrapper">
    <div class="main-page">
        <div class="col_3">
            <div class="clearfix"> </div>
        </div>
        <div class="charts">
            <div class="mid-content-top charts-grids">
                <div class="middle-content">
                    <div class="card">
                        <form enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="username">User Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->username; ?>" class="form-control" name="username" id="username">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="fullname">Full Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->fullname; ?>" class="form-control" name="fullname" id="fullname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->email; ?>" class="form-control" name="email" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="mobile">Mobile</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo $UsersDataById['Data'][0]->mobile; ?>" class="form-control" name="mobile" id="mobile">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="gender">Gender</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="radio" <?php if ($UsersDataById['Data'][0]->gender == "Male") {
                                                            echo "checked";
                                                        }  ?> name="gender" id="Male" value="Male"> <label for="Male"> Male</label>
                                    <input type="radio" <?php if ($UsersDataById['Data'][0]->gender == "Female") {
                                                            echo "checked";
                                                        }  ?> name="gender" id="Female" value="Female"> <label for="Female"> Female</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="">Hobbies</label>
                                </div>
                                <div class="col-md-8">
                                    <?php
                                    $hobby = explode(",", $UsersDataById['Data'][0]->hobby);
                                    // echo "<pre>";
                                    // print_r($hobby);
                                    // var_dump(in_array("cricket", $hobby));
                                    // echo "</pre>";
                                    ?>
                                    <input type="checkbox" name="hobby[]" <?php if (in_array("cricket", $hobby)) {
                                                                                echo "checked";
                                                                            } ?> id="cricket" value="cricket"> <label for="cricket">Cricket</label>
                                    <input type="checkbox" name="hobby[]" <?php if (in_array("gaming", $hobby)) {
                                                                                echo "checked";
                                                                            } ?> id="gaming" value="gaming"> <label for="gaming">gaming</label>
                                    <input type="checkbox" name="hobby[]" <?php if (in_array("travelling", $hobby)) {
                                                                                echo "checked";
                                                                            } ?> id="travelling" value="travelling"> <label for="travelling">travelling</label>
                                    <input type="checkbox" name="hobby[]" <?php if (in_array("reading", $hobby)) {
                                                                                echo "checked";
                                                                            } ?> id="reading" value="reading"> <label for="reading">reading</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="Country">Country</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="country" id="Country">
                                        <option value=""></option>

                                        <?php
                                        foreach ($countriesdata['Data'] as $countrykey => $countryvalue) { ?>
                                            <option <?php if ($countryvalue->name == $UsersDataById['Data'][0]->country ) {
                                                echo 'Selected';
                                            } ?> value="<?php echo $countryvalue->name; ?>"><?php echo $countryvalue->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="State">State</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="state" id="State">
                                        <option value=""></option>
                                        <?php
                                        foreach ($statesdata['Data'] as $statekey => $statevalue) { ?>
                                            <option <?php if ($statevalue->name == $UsersDataById['Data'][0]->state ) {
                                                echo 'Selected';
                                            } ?> value="<?php echo $statevalue->name; ?>"><?php echo $statevalue->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="City">City</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="city" id="City">
                                    <option value=""></option>
                                        <?php
                                        foreach ($citiesdata['Data'] as $citykey => $cityvalue) { ?>
                                            <option <?php if ($cityvalue->city == $UsersDataById['Data'][0]->city ) {
                                                echo 'Selected';
                                            } ?> value="<?php echo $cityvalue->city; ?>"><?php echo $cityvalue->city; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="profile_pic">Profile Pic</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="prof_pic" id="prof_pic">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <input type="submit" class="btn btn-primary" name="update" id="update" value="update">
                                    <!-- <input type="reset" class="btn btn-danger"> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>