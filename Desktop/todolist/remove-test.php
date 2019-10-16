<?php

	function remove(){
		$tasks = array();
		$indexes = $_POST['indexes'];

		$file = fopen('tasks.csv','a+');

		while(true){
		// Lecture d'une ligne du fichier CSV, donc d'une tâche.
			$taskData = fgetcsv($file);

			// Est-ce qu'on est à la fin du fichier ?
			if($taskData == false)
			{
				// Oui, fin de la boucle de lecture du fichier CSV.
				break;
			}

			// Ajout de la tâche à la liste de tâches.
			array_push($tasks, $taskData);
		}

		foreach($taskData as $index){
			
		}

	}

?>