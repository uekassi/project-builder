<?php 
	require "controller/controller.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
	<meta name="description" content="Outil en ligne de gestion de projet">
	<title><?php echo $project_name; ?> </title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>
	<div class="page-background-blur"></div>
	<div class="page-contain height-100vh">
		<div class="parent-height parent-width overflow-auto">
			<div class="top-menu">
				<nav class="height-auto">
					<ul>
						<li>
							<a href="#description">Description</a>
						</li>
						<li>
							<a href="#tasks">Tâches</a>
						</li>
					</ul>
				</nav>

				<div class="height-90vh">
					<div class="parent-height parent-width center">
						<div>
							<h1>Nom du projet</h1>
							<h2>
								<?php echo $project_name; ?>
							</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="container task-container">
				<div id="description">
					<h2>Description</h2>
					<p>
						<?php echo $project_description; ?>
					</p>
				</div>
				<div id="tasks" class="row center">
					<div class="col-12">
						<h2>Tâches</h2>
					</div>
					<?php 
						for ($i=0; $i <$number_of_tasks ; $i++) { 
					?>
					<div class="col-12 box">
						<div class="container">
							<div class="row">
								<div class="col-sm-4">
									<img src="public/gif/lightbulb.gif" alt="lightbulb.gif" class="parent-height parent-width">
								</div>
								<div class="col-sm-8">
									<h3>
										<?php echo $task[$i]['titre']; ?>
									</h3>
									<h4>
										La tâche est éxécutée par : <?php echo $task[$i]['gestionnaire']; ?>	
									</h4>
									<h4>Description de la tâche</h4>
									<p>
										<?php echo $task[$i]['description']; ?><br>
										<button class="show-form btn btn-success">J'éxécute la tâche</button>
									</p>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="container background-color-black height-100vh width-100vw center" id="form_for_task_builder">
				<form action="controller/controller.php" method="post" class="form-group jumbotron">
					<button class="close">&times;</button>
					<input name="name" type="text" placeholder="Votre nom" class="form-control" required><br>
					<input name="surname" type="text" placeholder="Votre prénom" class="form-control" required><br>
					<label for="task_number">Nombre de la tâche</label>
					<input name="task_number" type="number" min="1" max="5" class="form-control" id="task_number" required="">

					<p class="form-text">
						Chaque tâche aura une durée de 24h
					</p>
					<label for="start_task_time">Heure de début</label><br>
					<input name="start_task_time" type="time" class="form-control" id="start_task_time" required><br>
					<input name="add-task-builder-button" type="submit" value="Valider" class="btn btn-danger">
				</form>
			</div>
		</div>
	</div>

	<script src="public/js/jquery.js"></script>
	<script src="public/js/main.js"></script>
</body>
</html>