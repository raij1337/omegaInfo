<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Montar Computador</title>
	<link rel="stylesheet" type="text/css" href="css/cssManual.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<meta name="description" content="Ômega Info é um site de vendas de computadores personalizados ou prontos!">
	<meta name="keywords" content="Ômega Info, computadores, personalizados, montar, comprar, venda, pronto">
	<meta name="author" content="Richard Alexandre Idesti Junior, Paulo Henrique Meneghini, Thalles Ariel Oliveira Santos & Vinicius Pereira Lins">
	<script type="text/javascript">
		$(document).ready(function() {
			$("#slcProcessador").click(function(event) {
				$("#slcPlacaMae").load('slcPlacaMae.php');
			});
		});
	</script>
	<script type="text/javascript">
        function mostrar_imagem(id){
            $.ajax({
                url:'images.php',
                type:'GET',
                data:{
                    codigoItem:id
                },
                success:function(data){
                    $('.recebe_imagem').html(data);
                }
            });
        }
</script>
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
		                <a href="home.php"><img src="img/logo.png" id="logo"></a>
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
			<form>
				<h2>Montar Computador</h2>
				
				<p class="tituloSelect">Nome do computador</p>
				<input type="text" class="txtEx">
				
				<p class="tituloSelect">Processador</p>
				<select id="slcProcessador" class="selects">
					<option class="optn">Selecione</option>
				
				<?php				require("conexao.php");
			
					$qr = mysqli_query($mysqli,"SELECT * FROM processador") or die(mysqli_error());
					while($ln = mysqli_fetch_assoc($qr)){
?>						<option onClick="mostrar_imagem" data-img="<?php echo $ln['imagem']?>" value="<?php echo $ln['id']?>"><?php echo $ln['nome']?> [R$ <?php echo $ln['preco'] ?>]</option>
<?php				}				
?>				</select>
				
				
				
				<p class="tituloSelect">Water Cooler[opcional]</p>
				
				<div class="slcBloco">
					<div class="recebe_imagem"></div>
					<select onchange="mostrar_imagem(this.value)">
						<option>Selecione</option>
						<option>Nenhum</option>
					<?php
						require("conexao.php");
						
						$qr = mysqli_query($mysqli,"SELECT * FROM produtos where categoria='watercooler' ") or die(mysqli_error());
						while($ln = mysqli_fetch_assoc($qr)){
	?>						<option data-img="<?php echo $ln['imagem']?>" value="<?php echo $ln['id']?>"><?php echo $ln['nome']?> [R$ <?php echo $ln['preco'] ?>]</option>
	<?php				}				
	?>				</select>
				</div>
				
				<p class="tituloSelect">Placa mãe</p>
				<select id="slcPlacaMae">
					<option>Selecione um processador</option>

				</select>
					
				</select>
				
				<p class="tituloSelect">Placa de vídeo[opcional]</p>
				<select>
					<option>Selecione</option>
					<option>Nenhuma</option>
<?php				require("conexao.php");
			
					$qr = mysqli_query($mysqli,"SELECT * FROM produtos where categoria='placadevideo' ") or die(mysqli_error());
					while($ln = mysqli_fetch_assoc($qr)){
?>						<option data-img="<?php echo $ln['imagem']?>" value="<?php echo $ln['id']?>"><?php echo $ln['nome']?> [R$ <?php echo $ln['preco'] ?>]</option>
<?php				}				
?>				</select>
				
				<button id="btnMenos"><span class="glyphicon glyphicon-minus"></span></button>
				<input name="qtdProd" id="qtdProd" type="text" disabled placeholder="0">
				<button id="btnMais"><span class="glyphicon glyphicon-plus"></span></button>

				<p class="tituloSelect">Memória ram</p>
				<select>
					<option>Selecione</option>
<?php				require("conexao.php");
			
					$qr = mysqli_query($mysqli,"SELECT * FROM produtos where categoria='mem_ram' ") or die(mysqli_error());
					while($ln = mysqli_fetch_assoc($qr)){
?>						<option data-img="<?php echo $ln['imagem']?>" value="<?php echo $ln['id']?>"><?php echo $ln['nome']?> [R$ <?php echo $ln['preco'] ?>]</option>
<?php				}				
?>				</select>
				<button id="btnMenos"><span class="glyphicon glyphicon-minus"></span></button>
				<input name="qtdProd" id="qtdProd" type="text" disabled placeholder="0">
				<button id="btnMais"><span class="glyphicon glyphicon-plus"></span></button>

				<p class="tituloSelect">Hard Disk</p>
				<select>
					<option>Selecione</option>
<?php				require("conexao.php");
			
					$qr = mysqli_query($mysqli,"SELECT * FROM produtos where categoria='hd' ") or die(mysqli_error());
					while($ln = mysqli_fetch_assoc($qr)){
?>						<option data-img="<?php echo $ln['imagem']?>" value="<?php echo $ln['id']?>"><?php echo $ln['nome']?> [R$ <?php echo $ln['preco'] ?>]</option>
<?php				}				
?>				</select>
				<button id="btnMenos"><span class="glyphicon glyphicon-minus"></span></button>
				<input name="qtdProd" id="qtdProd" type="text" disabled placeholder="0">
				<button id="btnMais"><span class="glyphicon glyphicon-plus"></span></button>
				
				<p class="tituloSelect">SSD[opcional]</p>
				<select>
					<option>Selecione</option>
					<option>Nenhum</option>
<?php				require("conexao.php");
			
					$qr = mysqli_query($mysqli,"SELECT * FROM produtos where categoria='ssd' ") or die(mysqli_error());
					while($ln = mysqli_fetch_assoc($qr)){
?>						<option data-img="<?php echo $ln['imagem']?>" value="<?php echo $ln['id']?>"><?php echo $ln['nome']?> [R$ <?php echo $ln['preco'] ?>]</option>
<?php				}				
?>				</select>
				<button id="btnMenos"><span class="glyphicon glyphicon-minus"></span></button>
				<input name="qtdProd" id="qtdProd" type="text" disabled placeholder="0">
				<button id="btnMais"><span class="glyphicon glyphicon-plus"></span></button>

				<p class="tituloSelect">Gravador[opcional]</p>
				<select>
					<option>Selecione</option>
					<option>Nenhum</option>
<?php				require("conexao.php");
			
					$qr = mysqli_query($mysqli,"SELECT * FROM produtos where categoria='gravador' ") or die(mysqli_error());
					while($ln = mysqli_fetch_assoc($qr)){
?>						<option data-img="<?php echo $ln['imagem']?>" value="<?php echo $ln['id']?>"><?php echo $ln['nome']?> [R$ <?php echo $ln['preco'] ?>]</option>
<?php				}				
?>				</select>
				<p class="tituloSelect">Sistema Operacional</p>
				<select>
					<option>Selecione</option>
<?php				require("conexao.php");
			
					$qr = mysqli_query($mysqli,"SELECT * FROM produtos where categoria='so' ") or die(mysqli_error());
					while($ln = mysqli_fetch_assoc($qr)){
?>						<option data-img="<?php echo $ln['imagem']?>" value="<?php echo $ln['id']?>"><?php echo $ln['nome']?> [R$ <?php echo $ln['preco'] ?>]</option>
<?php				}				
?>				</select>
				<p class="tituloSelect">Fonte</p>
				<select>
					<option>Selecione</option>
<?php				require("conexao.php");
			
					$qr = mysqli_query($mysqli,"SELECT * FROM fonte") or die(mysqli_error());
					while($ln = mysqli_fetch_assoc($qr)){
?>						<option data-img="<?php echo $ln['imagem']?>" value="<?php echo $ln['id']?>"><?php echo $ln['nome']?> <?php echo $ln['potencia']?>W  [R$ <?php echo $ln['preco'] ?>]</option>
<?php				}				
?>				</select>
				<br>
					<a href="#" id="btn_addcar" class="btn btn-default" role="button">Adicionar ao carrinho</a>
				</form>

			
			<div id="rodape">
			</div>
		</div>
</div>
	
	<script src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<!--pesquisar passagem de paremetro atraves do load, post get, jquery load.-->