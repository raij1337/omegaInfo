<?php
	include("conexao.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <!--Informa ao Internet explorer que deve usar o mecanismo de renderização mais novo-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Define a proporção do conteúdo em relação a tela-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log-in</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/cssManual.css">
		
    </head>
    <body>
	    <div id="tudo">
	        <div class="container">
			
	            <h1>Cadastro</h1>

					<form id="formCad" method="post" name="formCad"  action="">
						<span>
							<span class="glyphicon glyphicon-user"></span>
							<input type="text" name="nome" id="nome" class="txtCaixa" placeholder="Nome Completo" autofocus>
						</span>
						<span>
							<span class="glyphicon glyphicon-paperclip"></span>
							<input type="text" name="email" id="email" class="txtCaixa" placeholder="E-mail" required>
						</span>
						<span>
							<span class="glyphicon glyphicon-credit-card"></span>
							<input type="text" name="cpf" id="cpf" class="txtCaixa" placeholder="CPF" required="">
						</span>
						<span>
							<span class="glyphicon glyphicon-calendar"></span>
							<input type="date" name="dataNasc" id="dataNasc" class="txtCaixa" required="">
						</span>
						<span>
							<span class="glyphicon glyphicon-lock"></span>
							<input type="password" name="senha" id="password" class="txtCaixa" placeholder="Senha" required="">
						</span>
						<span  id="cad">
							<input type="submit" class="btn btn-danger btn-lg" value="Cadastrar">
						</span>
						<span class="parEstilo1">
							<p>Já possui conta? faça o <a href="index.php">Log-in</a></p>
						</span>
					</form>
				</center>
			</div>
	    
	        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	        <script src="js/jquery-1.12.3.min.js"></script>
	        <!-- Include all compiled plugins (below), or include individual files as needed -->
	        <script src="js/bootstrap.min.js"></script>
        </div>
    </body>
</html>