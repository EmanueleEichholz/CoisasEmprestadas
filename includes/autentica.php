<?php
	//Inicia a sessão
	session_start();
	
	// Verifica se foi criada uma sessão e se há um id correspondente
	if(!isset($_SESSION['id'])){
		header("Location: index.php?autentica=1");
		
	}