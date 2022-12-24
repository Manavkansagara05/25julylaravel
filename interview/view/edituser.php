<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <div class="card" style="width: 18rem;">
        <div class="card-body">

            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <!-- <input type="hidden" name="id" value="<?php echo $userdatabyid['Data'][0]->id?>" > -->
                        <label for="">enter name</label>
                        <input type="text" value="<?php echo $userdatabyid['Data'][0]->username?>" name="username" id="username">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">enter email</label>
                        <input type="text" value="<?php echo $userdatabyid['Data'][0]->email?>" name="email" id="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">enter mobile no.</label>
                        <input type="text" value="<?php echo $userdatabyid['Data'][0]->mobile?>" name="mobile" id="mobile">
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-3">
                        <input type="submit" value="update" name="update" id="update">
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>

</html>