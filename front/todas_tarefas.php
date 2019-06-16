<?php


$acao = "recuperar";

require "tarefa_controller.php";


/*
echo "<pre>";
print_r($tarefas);
echo "<pre>";
*/


?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="App lista de tarefas">
		<meta name="author" content="Luis Carlos">
		
		<title> App Lista de Tarefas </title>

		<link rel="stylesheet" href="../css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="shortcut icon" href="../img/logo.png">

	</head>

	<body>


		<!-- Inicio NavBar -->
		<nav class="navbar navbar-light bg-light">

			<div class="container">

				<a class="navbar-brand" href="index.php">

					<img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">

					App Lista Tarefas

				</a>

			</div>

		</nav>
		<!-- Inicio NavBar -->


		<!-- Inicio Menu Lateral -->
		<div class="container app">

			<div class="row">

				<div class="col-sm-3 menu">

					<ul class="list-group">

						<li class="list-group-item"><a href="index.php"> Tarefas pendentes </a></li>

						<li class="list-group-item"><a href="nova_tarefa.php"> Nova tarefa </a></li>

						<li class="list-group-item active"><a href="#"> Todas tarefas </a></li>

					</ul>

				</div>


				<div class="col-sm-9">

					<div class="container pagina">

						<div class="row">

							<div class="col">

								<h4> Todas tarefas </h4>

								<hr />



								<!-- Inicio Preenchendo de forma dinamica os itens (BD) -->
								<?php foreach($tarefas as $indice => $tarefa) { ?>


									<div class="row mb-3 d-flex align-items-center tarefa">


										<div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>"> 
											
											<?= $tarefa->tarefa ?> (<?= $tarefa->status ?>) 
									
										</div>



											<!-- Inicio dos BTNs(Deletar, Alterar e Checkar) -->
											<div class="col-sm-3 mt-2 d-flex justify-content-between">


												<i class="fas fa-trash-alt fa-lg text-danger" style="cursor: pointer;" title="Excluir"></i>


												<i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')" style="cursor: pointer;" title="Editar"></i>


												<i class="fas fa-check-square fa-lg text-success" style="cursor: pointer;" title="Check"></i>


											</div>
											<!-- Fim dos BTNs(Deletar, Alterar e Checkar) -->


										</div>


								<?php } ?>
								<!-- Fim Preenchendo de forma dinamica os itens (BD) -->

								
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>
		<!-- Fim Menu Lateral -->


		<!--  <script src="../js/editar.js"> </script>   -->


	</body>


</html>
