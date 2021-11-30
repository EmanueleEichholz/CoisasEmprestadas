<?php
	include "includes/topo.php";
?>
		<header>
		  <h2>Coisas Emprestadas</h2>
		</header>
		<section>
		  	<?php 
				include "includes/menu.php";
		  	?>
		  <article>
		  	<p> Olá, <?php echo $_SESSION['nome']; ?>! 😀</p>  <br/><br/><br/><br/>
			<a href="logout.php">Sair</a>
		  </article>
		</section>
<?php
	include "includes/rodape.php";
?>