<?php
    include "includes/topo.php";
?>
    <header>
        <h2>Itens emprestados</h2>
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
                <th>Data Prevista de Devolução</th>
            </tr>
        <?php
                include "includes/conecta.php";

                $id = $_SESSION['id'];
                $id_usuario = $id;

                //Monta comando SQL para obter todos os pacients
                $sql = "SELECT nome, categoria, descricao, dtdevolucao FROM itens WHERE `status`=1 AND id_usuario=$id";

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