<?php
    include "includes/conecta.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $dtnasc = $_POST['dtnasc'];
    $genero = $_POST['genero'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $senha = $_POST['senha'];


    $sql = "INSERT INTO 
            usuarios (nome, email, cpf, celular, dtnasc, genero, logradouro, numero, complemento, bairro, cidade, uf, senha)
            VALUES
            ('$nome', '$email', '$cpf', '$celular', '$dtnasc', '$genero', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$uf', '$senha')";
     
    $res = mysqli_query($conn, $sql);

    if($res) {
        $email = $_POST["email"];
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
        
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
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
        } else {
            echo("Erro ao inserir!");
        }
    }
?>