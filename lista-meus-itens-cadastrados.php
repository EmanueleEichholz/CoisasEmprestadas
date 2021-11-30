<?php
    include "includes/topo.php";
?>
    <header>
        <h2>Meus itens cadastrados</h2>
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
                <th colspan=2>Ação</th>
            </tr>
        <?php
                include "includes/conecta.php";

                $id = $_SESSION['id'];
    
                //Monta comando SQL para obter todos os pacients
                $sql = "SELECT id_item, nome, categoria, descricao, dtdevolucao FROM itens WHERE id_usuario = $id";

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
                            <td><a href='cadastro-item.php?id_item=".$row['id_item']."'>Editar</a></td>
                            <td><a href='exclui-itens.php?id_item=".$row['id_item']."'>Excluir</a></td>
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