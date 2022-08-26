<?php
include ( 'heder.php');
  
// echo "<pre>";
// print_r($_SESSION)
 echo $_SESSION['userdata']['uname'];
 echo "<br>"
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body> 
    <div class=" btn mt-3">

        <a class="dropdown-item" href="logout.php">logout</a>
     
    </div>

 </body>
 </html>
