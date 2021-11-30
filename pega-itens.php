<?php
    include "includes/conecta.php";
        $id_item = $_GET['id_item'];
        $id = $_SESSION['id'];

        $sql = "UPDATE itens SET id_usuario_emprestimo = '$id', `status` = 1 WHERE id_item = '$id_item'";

        echo($sql);
        
        $res = mysqli_query($conn, $sql);

        if($res) {
            header("Location: lista-itens-pegos.php?id_item={$id_item}");
        } else {
            echo "Erro ao inserir!";
        }
  ?>  