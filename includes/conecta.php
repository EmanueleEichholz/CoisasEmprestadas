<?php

	//Faz a conxão com o bando de dados
	$conn = mysqli_connect("localhost", "root", "", "atp-fpw");
	if($conn == false){
		die("ERRO: Não conseguiu conectar no MySQL. " . mysqli_connect_error());
	}
	
?>