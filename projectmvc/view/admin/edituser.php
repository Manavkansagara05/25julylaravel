<?php
// echo "<pre>";
// print_r($UpdatewhereData);
// echo "</pre>";
?>
<div class="page-content">
    <!-- Page Header -->
    <div class="bg-dash-dark-2 py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <h4 class="title">Edit User's Data</h4>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-sm btn-success" href="addnewuser">Add New</a>
                </div>
            </div>

            <div class="card">
                <form method="post" enctype="multipart/form-data">
                    <div class="row-mt-3">
                        <div class="col-md-2"><label for="username">User Name</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="<?php echo $UsersDataById['Data'][0]->username; ?>" name="username" id="username">
                        </div>
                    </div>
                    <div class="row-mt-3">
                        <div class="col-md-2"><label for="fullname">Full Name</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="<?php echo $UsersDataById['Data'][0]->fullname; ?>" name="fullname" id="fullname">
                        </div>
                    </div>

                    <div class="row-mt-3">
                        <div class="col-md-2"><label for="email">Email</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="<?php echo $UsersDataById['Data'][0]->email; ?>" name="email" id="email">
                        </div>
                    </div>
                    <div class="row-mt-3">
                        <div class="col-md-2"><label for="mobile">Mobile</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="<?php echo $UsersDataById['Data'][0]->mobile; ?>" name="mobile" id="mobile">
                        </div>
                    </div>
                    <div class="row-mt-3">
                        <div class="col-md-2"><label for="gender">Gender</label>
                        </div>
                        <div class="col-md-8">
                            <input type="radio" name="gender" <?php if ($UsersDataById['Data'][0]->gender == "Male") {
                                                                    echo "checked";
                                                                } ?> id="Male" value="Male"> <label for="Male">Male</label>
                            <input type="radio" name="gender" <?php if ($UsersDataById['Data'][0]->gender == "Female") {
                                                                    echo "checked";
                                                                } ?> id="Female" value="Female"> <label for="Female">Female</label>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"><label for="hobby">Hobby</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                            $arrayofhobby = explode(",", $UsersDataById['Data'][0]->hobby);
                            //   echo "<pre>";
                            //   print_r($arrayofhobby);
                            //   var_dump(in_array("cricket",$arrayofhobby));
                            //   echo "</pre>";

                            ?>
                            <input type="checkbox" name="hobby[]" <?php if (in_array("cricket", $arrayofhobby)) {
                                                                        echo "checked";
                                                                    } ?> id="cricket" value="cricket"> <label for="cricket">Cricket
                                <input type="checkbox" name="hobby[]" <?php if (in_array("reading", $arrayofhobby)) {
                                                                            echo "checked";
                                                                        } ?> id="reading" value="reading"> <label for="reading">Reading</label>
                                <input type="checkbox" name="hobby[]" <?php if (in_array("swiming", $arrayofhobby)) {
                                                                            echo "checked";
                                                                        } ?> id="swiming" value="swiming"> <label for="swiming">Swiming</label>
                        </div>
                    </div>
                    <div class="row-mt-3">
                        <div class="col-md-2">
                            <label for="prof_pic">Prof_pic</label>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="file" name="prof_pic" id="prof_pic" value="<?php $UsersDataById['Data'][0]->prof_pic; ?>">
                            </div>
                        </div>
                        <div class="row-mt-2">
                            <div class="col">
                                <input type="text" name="old_prof_pic" id="old_prof_pic" value="<?php echo $UsersDataById['Data'][0]->prof_pic; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row-mt-3">
                        <div class="col">
                            <input type="submit" class="btn btn-info" name="update" id="update" value="update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>