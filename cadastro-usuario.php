<?php

    include "includes/topo.php";
	include "includes/conecta.php";

    $id = "";
	$nome = "";
	$email = "";
	$cpf = "";
	$celular = "";
	$dtnasc = "";
	$genero = "";
    $logradouro = "";
    $numero = "";
    $complemento = "";
    $bairro = "";
    $cidade = "";
    $uf = "";
    $senha = "";

	//Se foi enviado ID via GET - se é edição de usuario
	if(isset($_GET['id'])){
        ?>
        <header>
        <h1>Cadastrar usuário</h1>
        </header>
         <section>
        <?php
        include "includes/menu.php";

		//Obtém valor enviado via GET
		$id = $_GET['id'];
		$sql = "SELECT * FROM usuarios WHERE id = $id";
		//Envia a consulta para obter dados do usuario
		$res = mysqli_query($conn, $sql);
		//Armazena os dados obtidos
		$row = mysqli_fetch_assoc($res);

        $id = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
        $cpf = $row['cpf'];
        $celular = $row['celular'];
        $dtnasc = $row['dtnasc'];
        $genero = $row['genero'];
        $logradouro = $row['logradouro'];
        $numero = $row['numero'];
        $complemento = $row['complemento'];
        $bairro = $row['bairro'];
        $cidade = $row['cidade'];
        $uf = $row['uf'];
        $senha = $row['senha'];
	} else {
        //Se for usuário novo, não vai ter o menu e vai aparecer "cadastrar", com o formulário ocupando toda a tela
        ?>
        <header>
        <h1>Cadastrar usuário</h1>
        </header>
        <section>
        <?php
    }
?>
            <article> 
                <form action="recebe-usuario.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <label for="nome">Nome completo</label><input type="text" name="nome" value="<?php echo $nome; ?>"/><br/>
                    <label for="cpf">CPF</label> <input type="text" name="cpf" value="<?php echo $cpf; ?>" /><br/>
                    <label for="email">E-mail</label> <input type="email" name="email" value="<?php echo $email; ?>" /><br>
                    <label for="celular">Celular</label> <input type="text" name="celular" value="<?php echo $celular; ?>" /><br/>
                    <label for="dtnasc">Data de nascimento</label> <input type="date" name="dtnasc" value="<?php echo $dtnasc; ?>" /><br/>
                    <label for="genero">Gênero</label>
                    <select name="genero">
                        <option value = "Masculino" <?php if($genero=='M') { echo "selected";}?>>Masculino</option>
                        <option value = "Masculino" <?php if($genero=='F') { echo "selected";}?>>Feminino</option>
                    </select><br/>
                    <label for="logradouro">Logradouro/Rua/Avenida</label> <input type="text" name="logradouro" value="<?php echo $logradouro; ?>" /><br/>
                    <label for="numero"> Número</label> <input type="text" name="numero" value="<?php echo $numero; ?>" /><br/>
                    <label for="complemento">Complemento</label>  <input type="text" name="complemento" value="<?php echo $complemento; ?>" /><br/>
                    <label for="bairro">Bairro</label> <input type="text" name="bairro" value="<?php echo $bairro; ?>"  /><br/>
                    <label for="cidade">Cidade</label> <input type="text" name="cidade" value="<?php echo $cidade; ?>"  /><br/>
                    <label for="uf">UF</label> <input type="text" name="uf" value="<?php echo $uf; ?>" /><br/>
                    <label for="senha">Criar senha</label> <input type="password" name="senha" value="<?php echo $senha;?>"  /><br/>
                    <label for="senha">Confirmar senha</label> <input type="password" name="senha" value="<?php echo $senha;?>" /><br/>
                    <input type="submit" name="enviar"/><br/><br/>  
                    <a href="index.php">Voltar</a>
                </form>
            </article>
        </section>
 <?php
    include "includes/rodape.php";
?>       
