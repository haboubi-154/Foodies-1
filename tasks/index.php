<?php
include 'inc/header.php';

Session::CheckSession();

$logMsg = Session::get('logMsg');
if (isset($logMsg)) {
  echo $logMsg;
}
//$msg = Session::get('msg');
//if (isset($msg)) {
//  echo $msg;
//}
Session::set("msg", NULL);
Session::set("logMsg", NULL);
?>
<?php

if (isset($_GET['remove'])) {
  $remove = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['remove']);
  $removeUser = $users->deleteUserById($remove);
}

if (isset($removeUser)) {
  echo $removeUser;
}
if (isset($_GET['deactive'])) {
  $deactive = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['deactive']);
  $deactiveId = $users->userDeactiveByAdmin($deactive);
}

if (isset($deactiveId)) {
  echo $deactiveId;
}
if (isset($_GET['active'])) {
  $active = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['active']);
  $activeId = $users->userActiveByAdmin($active);
}

if (isset($activeId)) {
  echo $activeId;
}


 ?>
<table>
    <td>
        <br>
        <center>
            <label style="color: #A6AF7A;font-weight: bold;font-size: 35px;padding: -2px;">
                Menu :
            </label>
        </center>

        <br>

        <center>
        <button type="button" class="btn btn-primary" style="width: 70px;height: 70px;padding: 2px 2px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;" btn-xl"><i class="fa fa-users"></i>
        </button>
        </center>

        <center>
            <label style="color:  #E3493B;font-weight: bold;font-size: 20px;padding: -2px;">
            Gestion utilisateurs
        </label>
        </center>

        <hr>
        <center>
            <a class="btn btn-primary" style="width: 70px;height: 70px;padding: 2px 2px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;" href="products.php">
                <i class='fas fa-hamburger' style="color:white"></i>
            </a>
        </center>

        <center>
            <label style="color: #E3493B;font-weight: bold;font-size: 20px;padding: -2px;">
            Gestion Produits
        </label>
        </center>

        <hr>
        <center>
            <a class="btn btn-primary" style="width: 70px;height: 70px;padding: 2px 2px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;" href="Livraisons.php">
                <i class='fas fa-hamburger' style="color:white"></i>
            </a>
        </center>

        <center>
        <label style="color: #E3493B;font-weight: bold;font-size: 20px;padding: -2px;">
            Gestion Livraisons
        </label>
        </center>

        <hr>
        <center>
            <a class="btn btn-primary" style="width: 70px;height: 70px;padding: 2px 2px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;" href="Avis.php">
                <i class='fas fa-hamburger' style="color:white"></i>
            </a>
        </center>

        <center>
        <label style="color: #E3493B;font-weight: bold;font-size: 20px;padding: -2px;">
            Gestion Articles
        </label>
        </center>

        <hr>
        <center>
            <a class="btn btn-primary" style="width: 70px;height: 70px;padding: 2px 2px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;" href="Restaurant.php">
                <i class='fas fa-hamburger' style="color:white"></i>
            </a>
        </center>

        <center>
        <label style="color: #E3493B;font-weight: bold;font-size: 20px;padding: -2px;">
            Gestion Restaurants
        </label>
        </center>
    </td>
    <td>
        <div class="card ">
        <div class="card-header">
            <h3 style="color: #66CCFF;font-weight: bold"><i style class="fas fa-users mr-2"></i>User list <span class="float-right" style="color: # #E3493B;font-weight: bold">Welcome! <strong>
            <span class="badge badge-lg badge-secondary text-white">
<?php
$username = Session::get('username');
if (isset($username)) {
    echo $username;
}
?></span>

          </strong></span></h3>
        </div>
        <div class="card-body pr-2 pl-2">



            <table id="example" class="table table-striped table-bordered" style="width:100%; border-color: deepskyblue">
                <thead style="background-color : #FFCC00;font-size: 15px; color: black;font-weight: bold;">
                <tr >
                    <th  class="text-center" >Id</th>
                    <th  class="text-center">Nom</th>
                    <th  class="text-center">Utilisateur</th>
                    <th  class="text-center">Email</th>
                    <th  class="text-center">Mobile</th>
                    <th  class="text-center">Status</th>
                    <th  class="text-center">Crée le </th>
                    <th  width='25%' class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $allUser = $users->selectAllUserData();

                if ($allUser) {
                    $i = 0;
                    foreach ($allUser as  $value) {
                        $i++;

                        ?>

                        <tr class="text-center"
                            <?php if (Session::get("id") == $value->id) {
                                echo "style='background:#d9edf7' ";
                            } ?>
                        >

                            <td><?php echo $i; ?></td>
                            <td><?php echo $value->name; ?></td>
                            <td><?php echo $value->username; ?> <br>
                                <?php if ($value->role  == '1'){
                                    echo "<span class='badge badge-lg badge-info text-white'>Admin</span>";
                                } elseif ($value->role == '2') {
                                    echo "<span class='badge badge-lg badge-dark text-white'>Livraison</span>";
                                }elseif ($value->role == '3') {
                                    echo "<span class='badge badge-lg badge-dark text-white'>User Only</span>";
                                } ?></td>
                            <td><?php echo $value->email; ?></td>

                            <td><span class="badge badge-lg badge-secondary text-white"><?php echo $value->mobile; ?></span></td>
                            <td>
                                <?php if ($value->isActive == '0') { ?>
                                    <span class="badge badge-lg badge-info text-white">Active</span>
                                <?php }else{ ?>
                                    <span class="badge badge-lg badge-danger text-white">Deactive</span>
                                <?php } ?>

                            </td>
                            <td><span class="badge badge-lg badge-secondary text-white"><?php echo $users->formatDate($value->created_at);  ?></span></td>

                            <td>
                                <?php if ( Session::get("role") == '1') {?>
                                    <a class="btn btn-success btn-sm
                            " href="profile.php?id=<?php echo $value->id;?>">View</a>
                                    <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                                    <a onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                    <?php if (Session::get("id") == $value->id) {
                                        echo "disabled";
                                    } ?>
                             btn-sm " href="?remove=<?php echo $value->id;?>">Remove</a>

                                    <?php if ($value->isActive == '0') {  ?>
                                        <a onclick="return confirm('Are you sure To Deactive ?')" class="btn btn-warning
                       <?php if (Session::get("id") == $value->id) {
                                            echo "disabled";
                                        } ?>
                                btn-sm " href="?deactive=<?php echo $value->id;?>">Disable</a>
                                    <?php } elseif($value->isActive == '1'){?>
                                        <a onclick="return confirm('Are you sure To Active ?')" class="btn btn-secondary
                       <?php if (Session::get("id") == $value->id) {
                                            echo "disabled";
                                        } ?>
                                btn-sm " href="?active=<?php echo $value->id;?>">Active</a>
                                    <?php } ?>




                                <?php  }elseif(Session::get("id") == $value->id  && Session::get("role") == '2'){ ?>
                                    <a class="btn btn-success btn-sm " href="profile.php?id=<?php echo $value->id;?>">View</a>
                                    <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                                <?php  }elseif( Session::get("role") == '2'){ ?>
                                    <a class="btn btn-success btn-sm
                          <?php if ($value->role == '1') {
                                        echo "disabled";
                                    } ?>
                          " href="profile.php?id=<?php echo $value->id;?>">View</a>
                                    <a class="btn btn-info btn-sm
                          <?php if ($value->role == '1') {
                                        echo "disabled";
                                    } ?>
                          " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                                <?php }elseif(Session::get("id") == $value->id  && Session::get("role") == '3'){ ?>
                                    <a class="btn btn-success btn-sm " href="profile.php?id=<?php echo $value->id;?>">View</a>
                                    <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                                <?php }else{ ?>
                                    <a class="btn btn-success btn-sm
                          <?php if ($value->role == '1') {
                                        echo "disabled";
                                    } ?>
                          " href="profile.php?id=<?php echo $value->id;?>">View</a>

                                <?php } ?>

                            </td>
                        </tr>
                    <?php }}else{ ?>
                    <tr class="text-center">
                        <td>No user availabe now !</td>
                    </tr>
                <?php } ?>

                </tbody>

            </table>









        </div>
    </div>
    </td>
</table>



  <?php
  include 'inc/footer.php';

  ?>
