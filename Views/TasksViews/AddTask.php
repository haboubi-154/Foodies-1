
<!DOCTYPE html>
<html lang="fr">
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
          <a class="navbar-brand" style="font-size: 30px; color: white;font-weight: bold;" href="<?php echo $_SERVER['DOCUMENT_ROOT'];?>Foodies/index.php"><i class="fas fa-home mr-2"></i>Foodies</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">


                  <a style="font-size: 20px; color: white;font-weight: bold;" class="nav-link" href="AddTask.php"><i class="fas fa-user-plus mr-2"></i>Add Role </span></a>
                </li>

                <li class="nav-item">

                    <a style="font-size: 20px; color: white;font-weight: bold;" class="nav-link" href="\Foodies\index.php"><i class="fas fa-users mr-2"></i>Users list </span></a>
                </li>

            </ul>

          </div>
        </nav>





<div class="card ">
  <div class="card-header">
         <h3>User Profile <span class="float-right"> <a href="\Foodies\indexRole.php?p=tasks" class="btn btn-primary">Back</a> </h3>
       </div>
       <div class="card-body">

           <div style="width:600px; margin:0px auto">

           <form class="" action="/Foodies/indexRole.php?p=tasks/add_tasks" method="post">
               <div class="form-group pt-3">
                 <label for="name" style="font-color:red;font-size:35px;font-weight:bold">Role Name</label>
                 <input type="text" name="name"  class="form-control">
               </div>
               <div class="form-group">
                 <button type="submit" name="addUser" class="btn btn-success">Add</button>
               </div>


           </form>
         </div>


       </div>
     </div>
   </body>
</html>
