<?php
include('heder.php');

if (isset($_POST['ragist'])) {

  if ($_POST['username'] !== "" && $_POST['email'] !== "" && $_POST['phone'] !== ""  && $_POST['password'] !== "" && $_POST['select1'] !== "" && $_POST['selectcity'] !== "" &&$_POST['profil_pic'] !=="") {
    setcookie("username", $_POST['username'], time() + 3600);
    setcookie("email", $_POST['email'], time() + 3600);
    setcookie("phone", $_POST['phone'], time() + 3600);
    setcookie("password", $_POST['password'], time() + 3600);
    setcookie("select1", $_POST['select1'], time() + 3600);
    setcookie("selectcity", $_POST['selectcity'], time() + 3600);
    setcookie("selectcity", $_POST['selectcity'], time() + 3600);
    setcookie("profil_pic", $_POST['profil_pic'], time() + 3600);

    header("location:login.php");
  }
}
?>


<div class="container mt-5">
  
    <form method="post" enctype="multipart/form-data">
  
      <div class="form-group">
      <label class="form-label mt-4">enter your name</label>
         <input placeholder="enter user name" type="text" name="username" class="form-control" id="username">
    </div>
    <div class="form-group">
      <label class="form-label mt-4">enter your email</label>
         <input placeholder="enter email" type="text" name="email" class="form-control" id="email">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
    <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label mt-4">enter your mobile number</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="mobile no.">
  </div>

  <div class="form-group">
    <label for="Select1" class="form-label mt-4"> select states</label>
    <select class="form-select" id="Select1" name="select1">
      <option>gujarat</option>
      <option>rajesthan</option>
      <option>maharashtra</option>
      <option>uttar pradesh</option>
      <option>himachal pradesh</option>
    </select>
  </div>

  <div class="form-group">
    <label for="Select2" class="form-label mt-4">select your city</label>
    <select multiple="" class="form-select" id="Selectcity" name="selectcity">
      <option>rajkot</option>
      <option>junagadh</option>
      <option>jamnagar</option>
      <option>ahmedabad</option>
      <option>gandhinagar</option>
    </select>
  </div>

  <div class="form-group">
    <label for="formFile" class="form-label mt-4">enter profile pic</label>
    <input class="form-control" type="file" id="profil_pic" name="profil_pic">
  </div>

  <button type="submit" class="btn btn-primary mt-4" name="ragist">registration</button>

    </form>

</div>
