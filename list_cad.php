<!DOCTYPE html>

<html>
	<body>
		<a href="cad_conta.php">Cadastrar Conta</a> | 
		<a href="list_cad.php">Listar Cadastro</a> | 
		<a href="dep.php">Depósito</a> | 
		<a href="saq.php">Saque</a> |
		<fieldset>
			<legend>Lista de Cadastro</legend>
		<?php 
		
		session_start();
		
		?>
		<table border="1">
			<tr>
				<th>Nome</th>
				<th>Agência</th>
				<th>Conta</th>
				<th>Saldo</th>
			</tr>
			<?php
				$cc=0;
				foreach($_SESSION["nome_cnt"] as $i => $v){
				$cc+=1;
				$_SESSION["cc"]=$cc;
			?>
				<tr>
					<td><?= $v;?></td>
					<td><?= $_SESSION["ag"][$i];?></td>
					<td><?= $_SESSION["cc"] ;?></td>
					<td><?= $_SESSION["saldo"];?></td>
				</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>