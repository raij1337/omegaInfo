<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$dataNasc = $_POST['dataNasc'];
	$pass = $_POST['password'];
	$dataCad = date('d-m-Y H:i:s');
	
	$sql = "INSERT INTO contas(id,nome,email,cpf,dataNasc,pass,dataCad) values('','$nome','$email','$cpf','$dataNasc','$pass','$dataCad')";
	include_once("connection.php");
	$conn->query($sql);

echo " Registro gravado com sucesso!<br>";
echo "<a href='cadastro.php'>Voltar</a>";
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
</body>
</html>