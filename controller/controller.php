<?php
	error_reporting(E_ALL);
	ini_set('display_erros', true);
	ini_set('html_errors', false);
	
	$project_name = "JPK (Gestion du Backend)";
	$project_description = "Description du projet"; 

	$task = [
		[
			'titre' => 'Création et architecture de la BD', 
			'gestionnaire' => 'Nguessi', 
			'description' => 'Définir les tables de la BD et mode de communication probable entre elles', 
			'debut' => 'Date de début non determiné', 
			'fin' => 'Achevé'
		],
		[
			'titre' => 'Etude du fonctionnement de Trivago', 
			'gestionnaire' => 'Ulrich Ekassi', 
			'description' => 'Trivago est un site similaire à ce que nous voulons réaliser, il est donc un parfait exemple pour la création de notre site. Le site officiel de Trivago est www.trivago.com', 
			'debut' => 'Achevé', 
			'fin' => 'Achevé'
		],
		[
			'titre' => 'Inscription avec Google ou Facebook', 
			'gestionnaire' => 'non déterminée', 
			'description' => 'implémenter un système de creation de compte par google ou par facebook', 
			'debut' => 'non déterminée', 
			'fin' => 'non déterminée'
		],
		[
			'titre' => 'fonction d affichage des informations concernant les biens de façon aléatoire', 
			'gestionnaire' => 'Non déterminée', 
			'description' => 'Créer cette fonction', 
			'debut' => 'non déterminée', 
			'fin' => 'non déterminée'
		],
		[
			'titre' => 'auto complétion pour les recherches d hotels ou de maison ou meme d appartement', 
			'gestionnaire' => 'non déterminée', 
			'description' => 'auto complétion pour les recherches', 
			'debut' => 'non déterminée', 
			'fin' => 'non déterminée'
		],
		[
			'titre' => 'fonction pour la consultation des propositions récentes',
			'gestionnaire' => 'non déterminée',
			'description' => 'fonction de consultation des propositions récentes',
			'debut' => 'non déterminée',
			'fin' => 'non déterminée'
		],
		[
			'titre' => 'fonction pour aperçu des réservations',
			'gestionnaire' => 'non déterminée',
			'description' => 'comment implémenter un système pareil',
			'debut' => 'non déterminée',
			'fin' => 'non déterminée'
		],
		[
			'titre' => 'Moyen de paiement',
			'gestionnaire' => 'non déterminée',
			'description' => 'comment implémenter un système pareil',
			'debut' => 'non déterminée',
			'fin' => 'non déterminée'
		],
		[
			'titre' => 'chatbot pour aide et assistance',
			'gestionnaire' => 'Ulrich Ekassi',
			'description' => 'créer un chatbot pour repondre aux question d un utilisateur',
			'debut' => 'non déterminée',
			'fin' => 'non déterminée'
		],
		[
			'titre' => 'fonction pour gérer une rubrique top hotels, maisons , appartements ...',
			'gestionnaire' => 'non déterminée',
			'description' => 'cette rubrique permet d afficher les hotels les hotels les plus appréciés',
			'debut' => 'non déterminée',
			'fin' => 'non déterminée'
		],
		[
			'titre' => 'fonction de recherche dans une table',
			'gestionnaire' => 'non déterminée',
			'description' => 'Ecrire cette fonction',
			'debut' => 'non déterminée',
			'fin' => 'non déterminée'
		],
		[
			'titre' => 'fonction de tri des biens par prix , par evaluation, suggestion, distance',
			'gestionnaire' => 'non déterminée',
			'description' => 'cette fonction sera utile pour gérer les filtres',
			'debut' => 'non déterminée',
			'fin' => 'non déterminée'
		]

	];
	$number_of_tasks = count($task);

	if (isset($_POST['add-task-builder-button'])) {
		if (isset($_POST['name']) & isset($_POST['surname']) & isset($_POST['start_task_time']) & isset($_POST['task_number'])) {
			$name = $_POST['name'];
			$task_number = $_POST['task_number'] - 1;
			unset($task[$task_number]['gestionnaire']);
			$task[$task_number]['gestionnaire'] = $name;

			header('Location: ../home.php');
		}
	}else {
		//header('Location: home.php');
	}
?>