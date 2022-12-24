<?php
// echo "<pre>";
// print_r($FetchAllUsersData);
?>
<div class="page-content">
    <!-- Page Header -->
    <div class="bg-dash-dark-2 py-4">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-11">
                    <h4 class="title">All User List</h4>
                </div>
                <div class="col">
                    <a class="btn btn-sm btn-success" href="addnewuser">Add New</a>
                </div>
            </div>



            <table class="table table-strip table-bordered mt-3">
                <thead class="bg-light text-dark">
                    <tr>
                        <th>Sr No.</th>
                        <th>User Name</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th class="col col-lg-1">Action</th>
                    </tr>

                </thead>
                <tbody>
                    <?php $count = 1;
                    foreach ($FetchAllUsersData['Data'] as $key => $value) {
                    ?>

                        <tr>

                            <td><?php echo $count; ?></td>
                            <td><?php echo $value->username; ?></td>
                            <td><?php echo $value->fullname; ?></td>
                            <td><?php echo $value->email; ?></td>
                            <td><?php echo $value->mobile; ?></td>
                            <td><?php echo $value->gender; ?></td>

                            <td>
                                <a href="edituser?userid=<?php echo $value->id; ?>"><i class="fa fa-edit btn btn-sm btn-info"></i> </a>
                                <a href="deleteuser?userid=<?php echo $value->id; ?>"><i class="fa fa-trash btn btn-sm btn-danger"></i></a>

                            </td>
                        </tr>
                    <?php $count++;
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>