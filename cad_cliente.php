<!DOCTYPE html>

<html>
	<body>
		<a href="cad_conta.php">Cadastrar Conta</a> | 
		<a href="list_cad.php">Listar Cadastro</a> | 
		<a href="dep.php">Depósito</a> | 
		<a href="saq.php">Saque</a> |
		<fieldset>
			<legend>Cadastrar Conta</legend>
		<?php 
		
		session_start();
		if(isset($_POST["nome_cnt"])){
			echo "<br/>Conta cadastrada com sucesso! ";
			if(!isset($_SESSION["contador1"])){
						
						$_SESSION["contador1"] = 0;
					
					}
					$_SESSION["saldo"][$_SESSION["contador1"]] = 0;
					$_SESSION["nome_cnt"][$_SESSION["contador1"]] = $_POST["nome_cnt"];
					$_SESSION["cpf"][$_SESSION["contador1"]] = $_POST["cpf"];
					$_SESSION["ag"][$_SESSION["contador1"]] = $_POST["ag"];
					$_SESSION["contador1"]++;
		?>	
			
		<?php
		}
		else{
		?>
		
		
				<form method="post" action="cad_conta.php">
					<label>Nome: </label>
					<input type="text" name="nome_cnt" required="required"> <br>
					<label>CPF: </label>
					<input type="number" name="cpf" min="1" step="1" required="required"> <br>
					<label>Agência: </label>
					<select name="ag" required="required">
						<option>---Selecione---</option>
						<option>3010-4</option>
						<option>1020-5</option>
						<option>1241-3</option>
						<option>1234-5</option>
					</select><br>
					<input type = "submit" value = "enviar" />
				</form>
		</fieldset>
		<?php
		}
		?>
	</body>
</html>