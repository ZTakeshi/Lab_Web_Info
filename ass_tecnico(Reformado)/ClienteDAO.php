<?php

	include_once ('Conexao.php');
	include_once ('Cliente.php');

	class ClienteDAO {

		public function InsereCliente(Cliente $cliente){
		
		    $con = new Conexao();
		    $stmt = $con->Conexao();

		    $sql = $stmt->prepare("INSERT INTO cadcliente(nome,email,senha) VALUES (?,?,?)");
		    $nome = $cliente->getNome();
		    $email = $cliente->getEmail();
		    $senha = $cliente->getSenha();

		    $sql->bindParam(1,$nome);
		    $sql->bindParam(2,$email);
		    $sql->bindParam(3,$senha);

			if($sql->execute()){
				echo "<script> alert('Cadastrado com sucesso!');window.location.href='index.php'; </script>";
			}else{
				echo "<script> alert('nao foi cadastrado! ') </script>";
			}
		
		}
	
	}

?>