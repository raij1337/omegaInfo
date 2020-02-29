<?php
	$codigoItem = $_GET['codigoItem'];
	//Aqui você faz um sql que pega o valor do caminho no banco com o valor do seu codigoItem 
	
	$mysqli = mysqli_connect('localhost', 'root', 'vertrigo', 'omegainfo');
	$img = mysqli_query("select imagem from produtos where id='$codigoItem'");
	
	$mostrar = '<img width="100" height="100" src="img/'.$img.'" />';

	echo $mostrar;
	
?>