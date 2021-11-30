<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/estilo.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
    </head>
    <body>
        <header>
            <h1>Coisas emprestadas</h1>
        </header>
        <div>
            <form action="login.php" method="post">
            <label for="email">Login</label><input type="text" name="login"/><br/>
            <label for="senha">Senha</label><input type="password" name="senha"/><br/>
            <input type="submit" name="enviar"/><br/>   
            </form>
            <a href="cadastro-usuario.php" id="cadastrar">Ainda não tem uma conta? Clique aqui e faça uma agora! :)</a>
        </div>
 <?php       
        include "includes/rodape.php";
?>

