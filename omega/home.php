<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Carrinho</title>
	<link rel="stylesheet" type="text/css" href="css/cssManual.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
	<meta name="description" content="Ômega Info é um site de vendas de computadores personalizados ou prontos!">
	<meta name="keywords" content="Ômega Info, computadores, personalizados, montar, comprar, venda, pronto">
	<meta name="author" content="Richard Alexandre Idesti Junior, Paulo Henrique Meneghini, Thalles Ariel Oliveira Santos & Vinicius Pereira Lins">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
	<!--Informa ao Internet explorer que deve usar o mecanismo de renderização mais novo-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Define a proporção do conteúdo em relação a tela-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
		<div class="container">
			<div id="theCarousel" class="carousel slide" data-ride="carousel">
                <!-- Define how many slides to put in the carousel -->
                <ol class="carousel-indicators">
                    <li data-target="#theCarousel" data-slide-to="0" class="active"> </li >
                    <li data-target="#theCarousel" data-slide-to="1"> </li>
                    <li data-target ="#theCarousel" data-slide-to="2"> </li>
                </ol >
               
                <!-- Define the text to place over the image -->
                <div class="carousel-inner">
                    <div class="item active" >
                        <div class ="slide1"></div>
                        <div class="carousel-caption">
                            <h1>Omega Info</h1>
                            <p>O melhor da atualidade!</p>
                            <p><a href="computador.php" class="btn btn-primary btn-sm">Compre na Omega Info</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slide2"></div>
                        <div class="carousel-caption">
                            <h1>Loja Especializada em computadores</h1>
                            <p>Omega Info está no mercado há 10 anos.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slide3"></div>
                        <div class="carousel-caption">
                            <h1>Frete grátis</h1>
                            <p>Entregamos em todas regiões do Brasil</p>
                        </div>
                    </div>
                </div>
               
                <!-- Set the actions to take when the arrows are clicked -->
                <a class="left carousel-control" href="#theCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"> </span>
                </a>
                <a class="right carousel-control" href="#theCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
		</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.12.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
</body>
</html>