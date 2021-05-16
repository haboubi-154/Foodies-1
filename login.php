<?php
include 'inc/header.php';
Session::CheckLogin();
?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
   $userLog = $users->userLoginAuthotication($_POST);
}
if (isset($userLog)) {
  echo $userLog;
}

$logout = Session::get('logout');
if (isset($logout)) {
  echo $logout;
}



 ?>


<div class="card " style ="width: 40rem; border-color: deepskyblue;margin:0 auto;margin-top: 100px;">

  <div class="card-header card bg-primary text-white">

          <h3 style="color: white; font-weight: bold" ><i class="fas fa-sign-in-alt mr-2"></i> login</h3>

  </div>
        <div class="card-body border-primary">


            <div style="width:450px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group">
                  <label for="email" style="color: red;font-weight: bold; font-size: 20px">Email address</label>
                  <input style="border-color: black" type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password" style="color: red;font-weight: bold; font-size: 20px">Password</label>
                  <input style="border-color: black" type="password" name="password"  class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="login" class="btn btn-success">Login</button>
                </div>


            </form>
          </div>



        </div>
      </div>
    <div class="card-footer card bg-primary text-white" style ="width: 40rem;margin:0 auto;">
        <h3 style="color: white; font-weight: bold" class='text-center'></i> Esprit 2021</h3>
    </div>
</div>


 <?php
  //include 'inc/footer.php';

  ?>
