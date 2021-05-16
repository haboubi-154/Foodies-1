<?php
//Exemple d'architecture MVC en PHP par eliseekn -> 59434291/43403398 - eliseekn@gmail.com

//on charge le fichier mère du controlleur
require "app/core/controller.php";

//classe HomeController instanciée de la classe Controlleur
class HomeRoleController extends Controller {

    //initialisation de la classe
	public function __construct() {
		parent::__construct();
	}

    //on affiche la page home avec une variable title définie
	public function indexRole() {
		$this->view->render("homeRole", ["title" => "Architecture MVC en PHP - Acceuil"]);
	}
}
?>
