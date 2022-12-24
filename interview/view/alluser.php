<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <table class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>username</th>
                <th>email</th>
                <th>mobile</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fachdata["Data"] as $key => $value) { ?>
                <tr>

                    <td><?php echo $value->username ?></td>
                    <td><?php echo $value->email   ?></td>  
                    <td><?php echo $value->mobile   ?></td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="edituser?userid=<?php echo $value->id; ?>">edit</a>

                        <a class="btn btn-sm btn-danger" href="deleteuser?userid=<?php echo $value->id; ?>">delete</i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>