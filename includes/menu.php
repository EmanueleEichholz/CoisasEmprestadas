<!-- Estrutura do menu lateral -->

<nav>
    <ul id="menu">  
        <li><a href="cadastro-item.php?id=<?php echo $_SESSION['id']?>">Cadastrar novo item</a></li>
        <li><a href="lista-completa.php?id=<?php echo $_SESSION['id']?>">Todos os itens disponíveis</a></li><br><br><br>
        <li><a href="lista-meus-itens-cadastrados.php?id=<?php echo $_SESSION['id']?>">Meus itens cadastrados</a></li>
        <li><a href="lista-itens-pegos.php?id=<?php echo $_SESSION['id']?>">Devolver itens</a></li>
        <li><a href="lista-meus-itens-emprestados.php?id=<?php echo $_SESSION['id']?>">Itens emprestados</a></li><br><br><br>
        <li><a href="cadastro-usuario.php?id=<?php echo $_SESSION['id']?>">Editar meu perfil</a>
        
        <li><a href="logout.php">Sair</a></li>
    </ul>       
</nav>

