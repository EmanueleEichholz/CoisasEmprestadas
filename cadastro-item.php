<?php
    include "includes/topo.php";
    include "includes/conecta.php";
   
    $id_item = "";
    $id_usuario = "";
    $id_usuario_emprestimo = 1;
    $status = "";
    $nome = "";
    $categoria = "";
    $descricao = "";
    $dtdevolucao = "";

    //Verifica se há um valor em id_item, porque se já tem, é edição do item
   if(isset($_GET['id_item'])) {
        //Obtem valor enviado via GET
        $id_item = $_GET['id_item'];

        $sql = "SELECT * FROM itens WHERE id_item = $id_item";
    
        //Envia a consulta para obter dados do item atual
        $res = mysqli_query($conn, $sql);
    
        //Armazena os dados obtidos
        $row = mysqli_fetch_assoc($res);

        $nome = $row['nome'];
        $categoria = $row['categoria'];
        $descricao = $row['descricao'];
        $dtdevolucao = $row['dtdevolucao'];
        
        $id = $_SESSION['id'];
        $id_usuario = $id;

   }
?>

<header>
    <h1>Cadastrar novo item</h1>
</header>
<section>
    <?php

    include "includes/menu.php";

    ?>

    <article>
        <form action="recebe-item.php?id=<?php echo $_SESSION['id']?>"" method="post">
        <input type="hidden" name="id_item" value="<?php echo $id_item; ?>"/><br>
        <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>"/><br>
        <input type="hidden" name="id_usuario_emprestimo" value="<?php echo $id_usuario_emprestimo; ?>"/><br>

        <label for="nome">Nome do item</label>
        <input type="text" name="nome" value="<?php echo $nome; ?>"/><br/>


        <label for="categoria">Categoria</label>
  
         <select name="categoria" value="<?php echo $categoria; ?>">
             <option value = "Móveis" <?php if($categoria=='Móveis') { echo "selected";}?>>Móveis</option>
             <option value = "Vestuário"  <?php if($categoria=='Vestuário') { echo "selected";}?>>Vestuário</option>
             <option value = "Utensílios domésticos"  <?php if($categoria=='Utensílios domésticos') { echo "selected";}?>>Utensílios domésticos</option>
             <option value = "Ferramentas & Construção"  <?php if($categoria=='Ferramentas & Construção') { echo "selected";}?>>Ferramentas & Construção</option>
             <option value = "Brinquedos"  <?php if($categoria=='Brinquedos') { echo "selected";}?>>Brinquedos</option>
             <option value = "Livros e materiais didáticos"  <?php if($categoria=='Livros e materiais didáticos') { echo "selected";}?>>Livros e materiais didáticos</option>
             <option value = "Outros"  <?php if($categoria=='Outros') { echo "selected";}?>>Outros</option>
         </select><br/>


         <label for="descricao">Descrição do item</label>
         <input type="text" name="descricao" value="<?php echo $descricao; ?>"/><br>

        <label for="dtdevolucao">Prazo máximo para devolução</label>
        <input type="date" name="dtdevolucao" value="<?php echo $dtdevolucao; ?>" /> <br/>

         <input type="submit"/><br><br>   
        </form>

    </article>
</section>


<?php

	include "includes/rodape.php";
	
?>
