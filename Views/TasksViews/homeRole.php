<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/tasks/assets/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/tasks/assets/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/tasks/assets/style.css">
</head>

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
                <a style="font-size: 20px; color: white;font-weight: bold;" class="nav-link" href="/AddTask.php"><i class="fas fa-user-plus mr-2"></i>Add Role </span></a>
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

      <p>Ajouter un role</p>
      <form action="index.php?p=tasks/add_tasks" method="post">
          <input type="text" name="role" required>
          <button type="submit" name="button">Ajouter</button>
      </form>

      <br>

      <div class="card-body pr-2 pl-2">
          <table id="example" class="table table-striped table-bordered" style="width:100%; border-color: deepskyblue">
              <thead style="background-color : #FFCC00;font-size: 15px; color: black;font-weight: bold;">
              <tr >
                  <th  class="text-center" >Id</th>
                  <th  class="text-center">Role</th>
                  <th  class="text-center">Crée le </th>
                  <th  class="text-center">Modifié le</th>
                  <th  width='25%' class="text-center">Actions</th>
              </tr>
              </thead>
              <tbody>
                <ul>
                    <!--on affiche la liste des produits contenu dans la variable tasks définit dans le controlleur-->
                    <?php foreach ($data['tasks'] as $role) { ?>
                        <li>
                            <?php echo $role ?>
                            <!--on utilise un script javascript pour envoyer la requête de mise à jour du nom du role-->
                            <a href="<?php echo "javascript:update_tasks('index.php?p=tasks/update_tasks/".$role."')" ?>">Modifier</a>
                            <a href="<?php echo "index.php?p=tasks/delete_tasks/".$role ?>">Supprimer</a>
                        </li>
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
</html>
