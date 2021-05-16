<?php

//classe mère des vues
class View {

    //on charge la page selon le nom de la vue
    public function render($page_name, $data) {
		$this->data = $data;

  //  require_once "/Views/TasksViews/".$page_name.".php"; //chemin d'accès au fichier

require_once $_SERVER['DOCUMENT_ROOT'] ."/Foodies/Views/TasksViews/$page_name.php";
//C:\Users\AMG\Desktop\Foodies\Views\TasksViews\tasks.php
    }
}
?>
