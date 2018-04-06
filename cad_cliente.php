<!DOCTYPE html>

<html>
	<body>
		<a href="cad_cliente.php">Cadastrar Conta</a> | 
		<a href="dep.php">Depósito</a> | 
		<a href="saq.php">Saque</a> |
		
		<fieldset>
			<legend>Cadastrar Conta</legend>
		<?php 
		if((file_exists("cliente.xml"))){
		
		session_start();
		if(isset($_POST["nome_cnt"])){
			echo "<br/>Conta cadastrada com sucesso! ";
			if(!isset($_SESSION["contador1"])){
						
						$_SESSION["contador1"] = 0;
					
					}
					$_SESSION["saldo"][$_SESSION["contador1"]] = 0;
					$_SESSION["nome_cnt"][$_SESSION["contador1"]] = $_POST["nome_cnt"];
					$_SESSION["email"][$_SESSION["contador1"]] = $_POST["email"];
					$_SESSION["senha"][$_SESSION["contador1"]] = $_POST["senha"];
					$_SESSION["contador1"]++;
		?>	
			
		<?php
		}
		else{
		?>
		
		
				<form method="post" action="cad_cliente.php">
					<label>Nome: </label>
					<input type="text" name="nome_cnt" required="required"> <br>
					<label>email: </label>
					<input type="email" name="email" min="1" step="1" required="required"> <br>
					<label>senha: </label>
					<input type="password" name="senha" min="1" step="1" required="required"> <br>
					
					<input type = "submit" value = "enviar" />
				</form>
		</fieldset>
		
		
		<?php
		if((file_exists("cliente.xml"))){
		
		$arquivo = 'cliente.xml';
					
					$xml= simplexml_load_file($arquivo);
					
					$posicao = sizeof($xml -> dados);
					if(isset($_POST["nome_cnt"])){
			
					
					

					 $xml->dados[$posicao ]->nome_cliente = "".$_POST["nome_cnt"];
					 $xml->dados[$posicao ]->email = "".$_POST["email"];
					 $xml->dados[$posicao ]->senha = "".$_POST["senha"];
					
					$xml -> asXML($arquivo);
			
			
					}
		}
		?>
	</body>
</html>