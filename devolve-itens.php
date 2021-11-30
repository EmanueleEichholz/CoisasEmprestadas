<?php
    include "includes/conecta.php";

        $id_item = $_GET['id_item'];

        $sql = "UPDATE itens SET
                id_usuario_emprestimo = 0,
                `status` = 0
            WHERE
                id_item = '$id_item'";
                
        $res = mysqli_query($conn, $sql);

        if($res) {
            header("Location: lista-itens-pegos.php");
        } else {
            echo "Erro ao inserir!";
        }
  ?>  