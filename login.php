<?php

	$login = $_POST["login"];
	$senha = $_POST["senha"];

		//Se foi enviado parâmetro de erro - se não autenticou
		if(isset($_GET['erro'])){
			echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
		}
	
		if(isset($_GET['autentica'])){
			echo '<p style="text-align:center;color:red">Você não tem permissão de acesso.</p>';
		}
	
	//Conecta com a base de dados
	include "includes/conecta.php";
	
	$sql = "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'";
	$res = mysqli_query($conn, $sql);
	
	//Obtém QTDE de registros encontrados
	$qtdeRegistros = mysqli_num_rows($res);
	
	//Encontrou login e senha compatíveis
	if($qtdeRegistros > 0){
		
		//Inicia a sessão
		session_start();
		
		//Obtém dados do usuário
		$row = mysqli_fetch_assoc($res);
		
		//Armazena informaçoes do usuário na Sessão
		$_SESSION['id'] = $row['id'];
		$_SESSION['nome'] = $row['nome'];
		
		header("Location: inicio.php?id=".$row['id']."");
	}
	else{
		header("Location: cadastro-usuario.php");
	}

?>