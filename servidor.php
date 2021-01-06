<?php
	date_default_timezone_set('America/Sao_Paulo');
	$pdo = new PDO('mysql:host=mysql669.umbler.com;dbname=codigoexpert','codigoexpert','p?7e]lh9Z3C?');



	if(isset($_POST['acao'])){
		$email = $_POST['email'];
		$momento_registro = date('Y-m-d H:i:s');

		$sql = $pdo->prepare("INSERT INTO `mini curso` VALUES (null,?,?)");

		$sql->execute(array($email,$momento_registro));
	}

	if(isset($_POST['acao-games'])){
		$email_games = $_POST['email-games'];
		$registro_games = date('Y-m-d H:i:s');

		$sql_games = $pdo->prepare("INSERT INTO `curso de games` VALUES (null,?,?)");

		$sql_games->execute(array($email_games,$registro_games));
	}

	if(isset($_POST['acao-fullstack'])){
		$email_fullstack = $_POST['email-full-stack'];
		$registro_fullstack = date('Y-m-d H:i:s');

		$sql_fullstack = $pdo->prepare("INSERT INTO `curso fullstack` VALUES (null,?,?)");

		$sql_fullstack->execute(array($email_fullstack,$registro_fullstack));
	}


?>