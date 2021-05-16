<?php
//Exemple d'architecture MVC en PHP par eliseekn -> 59434291/43403398 - eliseekn@gmail.com

//on charge le fichier mère du modèle
require $_SERVER['DOCUMENT_ROOT'] ."/Foodies/tasks/app/core/model.php";

//classe tasksModel instanciée de la classe Model
class tasksModel extends Model {

    //initialisation de la classe
	public function __construct() {
		parent::__construct();
	}

    //on récupère la liste des produits de la base de données
	public function get_tasks() {



		return $this->select("SELECT * FROM tasks");
	}

    //on insère un role dans la base de données
	public function add_tasks($role) {
		$this->execute("INSERT INTO tasks (role) VALUES ('$role')");

	}

    //on met à jour un role de la base de données
	public function update_tasks($old_role, $new_role) {
		$this->execute("UPDATE tasks SET role='$new_role' WHERE role='$old_role'");
	}

    //on supprime un role de la base de données
	public function delete_tasks($role) {
		$this->execute("DELETE FROM tasks WHERE role='$role' LIMIT 1");
	}
}
?>
