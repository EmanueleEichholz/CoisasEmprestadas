<?php

    include "includes/conecta.php";

    $id_item = $_POST['id_item'];
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $dtdevolucao = $_POST['dtdevolucao'];

    $id = $_GET['id'];
    $id_usuario = $id;
    $id_usuario_emprestimo = 0;

    if(empty($id_item)) {
        $sql = "INSERT INTO itens (id_usuario, id_usuario_emprestimo, `status`, nome, categoria, descricao, dtdevolucao)
        VALUES ('$id_usuario', '$id_usuario_emprestimo', '$status', '$nome', '$categoria', '$descricao', '$dtdevolucao')";

        echo($sql);

        $res = mysqli_query($conn, $sql);

        echo($res);

        if($res) {
            header("Location: lista-completa.php");
        } else {
            echo "Erro ao inserir!";
        }
    } 
    else {
        $sql = "UPDATE itens SET
                id_usuario = '$id_usuario',
                nome = '$nome',
                categoria = '$categoria',
                descricao = '$descricao',
                dtdevolucao = '$dtdevolucao'
            WHERE
                id_item = $id_item";
                
        $res = mysqli_query($conn, $sql);

        if($res) {
            header("Location: lista-meus-itens-cadastrados.php");
        } else {
            echo "Erro ao inserir!";
        }
    }
  ?>  