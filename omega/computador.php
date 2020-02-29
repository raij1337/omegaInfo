<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Carrinho</title>
	<link rel="stylesheet" type="text/css" href="css/cssManual.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8">
</head>
<body>
<div id="tudo">
	<!-- MENU -->
				
				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			        <div class="container">
			            <!-- Brand and toggle get grouped for better mobile display -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			                    <span class="sr-only">Toggle navigation</span>
			                    <span class="icon-bar"></span>
			                    <span class="icon-bar"></span>
			                    <span class="icon-bar"></span>
			                </button>
			                	<a href="home.php"><img src="img/logo.png" id="logo" alt="Omega Info"></a>
			            </div>
			            <!-- Collect the nav links, forms, and other content for toggling -->

			            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			                <ul class="nav navbar-nav">
			                    <li>
			                        <a href="#"><span class="glyphicon glyphicon-user"></span> Log-in/Sign-up</a>
			                    </li>
			                    <li>
			                        <a href="montar_pc.php"><span class="glyphicon glyphicon-cog"></span> Montar Computador</a>
			                    </li>
								<li>
									<a href="computador.php"><span class="glyphicon glyphicon-modal-window"></span> Computadores</a>
								</li>
			                    <li>
			                        <a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Meu Carrinho</a>
			                    </li>
			                </ul>
			                
			            </div>

			            <!-- /.navbar-collapse -->
			        </div>
			        <!-- /.container -->
			    </nav>

			    <!-- FIM DO MENU -->
				<div id="conteudo">
		<!-- GAMBIARRA -->
		<?php
			require("conexao.php");
			
			$qr = mysqli_query($mysqli,"SELECT * FROM produtos where categoria='computador'") or die(mysqli_error());
			while($ln = mysqli_fetch_assoc($qr)){ 
		?>
		<div class="pc">
			<?php
				echo '<p id="p_1">'.$ln['nome'].'</p>';
				echo '<img src="img/'.$ln['imagem'].'" id="img_car"/> <br />';
				echo '<p class="txtD">Preço : R$ '.number_format($ln['preco'], 2, ',', '.').'</p><br />';
				echo '<p class="txtD">'.$ln['descricao'].'</p>';
				echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><button type="button" class="btn btn-danger">Comprar</button></a>';
				echo '</div>';
			} ?>
		
		<!-- FIM DA GAMBIARRA -->
		</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.12.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
</body>
</html>