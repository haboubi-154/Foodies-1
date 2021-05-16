<?php

//on charge le fichier mère du controlleur
require $_SERVER['DOCUMENT_ROOT'] ."/Foodies/tasks/app/core/controller.php";

//on charge le fichier modèle des produits
require $_SERVER['DOCUMENT_ROOT'] ."/Foodies/tasks/app/models/tasks.php";
//classe tasksController instanciée de la classe Controlleur
class tasks extends Controller {

	private $tasks;

    //initialisation de la classe
	public function __construct() {
		parent::__construct();

		//initialisation de la classe modèle des produits
		$this->tasks = new tasksModel();
	}

	private function render() {
		$this->view->render("tasks", [
                "tasks" => $this->tasks->get_tasks() //on récupère la liste des produits de la base de données
            ]

        );
	}

    //on affiche la page tasks avec une variable title définie
	public function indexRole() {
		$this->render();
	}

    //on affiche la page tasks avec une variable title définie
	public function add_tasks($role) {
		//$this->tasks->add_tasks($role);

		$this->tasks->add_tasks($role);


		$this->render(); //on actualise la page
	}
//role
    //on affiche la page tasks avec une variable title définie
	public function update_tasks($old_role, $new_role) {
		$this->tasks->update_tasks($old_role, $new_role);
		$this->render();  //on actualise la page
	}

    //on affiche la page tasks avec une variable title définie
	public function delete_tasks($role) {
		$this->tasks->delete_tasks($role);
		$this->render(); //on actualise la page
	}
}
?>
