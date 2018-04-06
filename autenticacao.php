<?php
	session_start(); 
	
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	if(file_exists("cliente.xml")){
		
		$xml= simplexml_load_file('cliente.xml');
		
		while(!feof($xml)){
			
			foreach($xml -> dados as $dados){
				
				$email_arq = $dados->email;
				$senha_arq = $dados->senha;
				
				if(($email_arq == $email) && ($senha_arq == $senha)){
				$_SESSION["autenticação"] = 1;
				$_SESSION["email"] = $email_arq;
				$_SESSION["senha"] = $senha_arq;
				
				break;
			}

		}

		if(!isset($_SESSION["email"])){
			echo "Usuário e/ou senha não encontrados. <a href='index.php'>Voltar</a>";
		}
		else{
			header("location: index.php");
		}

	}
	else{
		echo "Ainda não há usuários cadastrados no sistema. 
		<a href='index.php'>voltar</a>";		
	}
	
	?>