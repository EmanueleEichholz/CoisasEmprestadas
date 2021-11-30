<?php
    include "includes/topo.php";
?>
    <header>
        <h2>Devolver itens</h2>
    </header>

    <section>
        <?php
            include "includes/menu.php"
        ?>
    <article>
        <table>
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Descrição</th>
                <th>Data de Devolução</th>
                <th colspan=1>Ação</th>
            </tr>
        <?php
                include "includes/conecta.php";
                
                $id = $_SESSION['id'];
                $id_usuario_emprestimo = "";

                //Monta comando SQL para obter todos os pacients
                $sql = "SELECT * FROM itens WHERE id_usuario_emprestimo = $id";
                
                //Envia código SQL para o MySQL
                $res = mysqli_query($conn, $sql);
               
                //Percorre os registros encontrados
                while($row = mysqli_fetch_assoc($res)) {
                    echo "
                        <tr>
                            <td>" . $row['nome'] . "</td>
                            <td>" . $row['categoria'] . "</td>
                            <td>" . $row['descricao'] . "</td>
                            <td>" . $row['dtdevolucao'] . "</td>
                            <td><a href='devolve-itens.php?id_item=".$row['id_item']."'>Devolver</a></td>
                        </tr>
                        ";
                }
        ?>

        </table>
    </article>
    </section>


<?php
    include "includes/rodape.php"
?>