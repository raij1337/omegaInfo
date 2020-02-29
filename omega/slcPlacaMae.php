					<option>Selecione</option>
<?php				require("conexao.php");
			
					$qr = mysqli_query($mysqli,"SELECT * FROM placa_mae where socket='' ") or die(mysqli_error());
					while($ln = mysqli_fetch_assoc($qr)){
?>						<option data-img="<?php echo $ln['imagem']?>" value="<?php echo $ln['id']?>"><?php echo $ln['nome']?></option>
<?php				}
?>