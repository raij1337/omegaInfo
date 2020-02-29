<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <!--Informa ao Internet explorer que deve usar o mecanismo de renderização mais novo-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Define a proporção do conteúdo em relação a tela-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <title>Sign-in</title>
    
        <!-- Bootstrap Stylesheet-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<link rel="stylesheet" type="text/css" href="css/cssManual.css">
    </head>
    <body>
        <div class="container">
            <center><h1>Entrar</h1></center>
			<center>
				<form id="formLogin" method="post" action="authentication.php">
					<span>
						<input type="text" name="email" id="txtEmail" placeholder="E-mail" class="txtCaixa" required autofocus>
					</span>
					<span>
						<input type="password" name="pass" placeholder="Senha" class="txtCaixa" required>
					</span>
					<span>
						<input type="submit" class="btn btn-danger btn-lg" value="Login">
					</span>
					<span class="parEstilo1">
						<a href="cadastro.html">Criar conta</a>
					</span>
				</form>
				<p class="text-center text-danger">
					<?php
						if(isset($_SESSION['loginError'])){
							echo $_SESSION['loginError'];
							unset($_SESSION['loginError']);
						}
					?>
			</center>
		</div>
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.12.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>