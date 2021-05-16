<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>

<body>
  <div class="container" style="max-width: 100%; margin: 0">
    <nav class="navbar navbar-expand-md navbar-dark  card-header" style="background-color : darkmagenta";>

      <a class="navbar-brand" style="font-size: 30px; color: white;font-weight: bold;" href="index.php"><i class="fas fa-home mr-2"></i>Foodies</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a style="font-size: 20px; color: white;font-weight: bold;" class="nav-link" href="indexRole.php?p=tasks"><i class="fas fa-tasks" style= "padding-right:10px"></i>Roles list </span></a>
            </li>

            <li class="nav-item">
                <a style="font-size: 20px; color: white;font-weight: bold;" class="nav-link" href="/Foodies/Views/TasksViews/AddTask.php"><i class="fas fa-user-plus mr-2"></i>Add Role </span></a>
            </li>

            <li class="nav-item">
                <a style="font-size: 20px; color: white;font-weight: bold;" class="nav-link" href="\Foodies\index.php"><i class="fas fa-users mr-2"></i>Users list </span></a>
            </li>
        </ul>
      </div>
    </nav>

    <div class="card ">
      <div class="card-header">
        <h3 style="color: #66CCFF;font-weight: bold"><i style class="fas fa-users mr-2"></i>Roles
           list <span class="float-right" style="color: # #E3493B;font-weight: bold">Welcome! <strong>
          <span class="badge badge-lg badge-secondary text-white"></span>
          </strong></span>
        </h3>
      </div>

      <div class="card-body pr-2 pl-2">
          <table id="example" class="table table-striped table-bordered" style="width:100%; border-color: deepskyblue">
              <thead style="background-color : #FFCC00;font-size: 15px; color: black;font-weight: bold;">
              <tr >
                <th width='25%' class="text-center">Id</th>

                <th width='25%' class="text-center">Role</th>

                  <th  width='25%' class="text-center">Actions</th>
              </tr>
              </thead>
              <tbody>
                <ul>
                    <!--on affiche la liste des produits contenu dans la variable tasks définit dans le controlleur-->

                    <?php
                     $i = 0;
                    foreach ($data['tasks'] as $role) {
                        $i++;
                      ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                            <?php echo $role ?>
                            <!--on utilise un script javascript pour envoyer la requête de mise à jour du nom du role-->
                            <td><a class="btn btn-info btn-sm" href="<?php echo "javascript:update_tasks('indexRole.php?p=tasks/update_tasks/".$role."')" ?>">Edit</a>
                            <a class="btn btn-danger btn-sm" href="<?php echo "indexRole.php?p=tasks/delete_tasks/".$role ?>">Remove</a></td>
                        </td>
                      </tr>
                    <?php } ?>
                </ul>
              </tbody>

          </table>

      </div>
  </div>
  </td>
</table>
</div>

    </div>
</body>

<script src="assets/jquery.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<script src="assets/jquery.dataTables.min.js"></script>
<script src="assets/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $("#flash-msg").delay(7000).fadeOut("slow");
    });
    $(document).ready(function() {
        $('#example').DataTable();
    } );

        function update_tasks(url) {
            var role_name = window.prompt("Entrez le nom du role", "");
            if (role_name != "") {
                window.location.href = url + "/" + role_name;
            }
        }
</script>
</html>
