<?php 
	  $email = $_POST['email'];
  	$btnLogin = $_POST['btnLogin'];
  	$senha = $_POST['senha'];
  	$conexao = mysqli_connect('localhost','root','');
  	$banco = mysqli_select_db($conexao, 'assistenciatec');

    if (isset($_POST['btnLogin'])) {
		
    $result_login = mysqli_query($conexao, "SELECT * from cadcliente WHERE email='$email' AND senha='$senha'") or die("erro ao selecionar");
  	
      if (mysqli_num_rows($result_login)<=0) {
    			echo"<script language='javascript' type='text/javascript'>alert('Login ou senha incorretos');window.location.href='index.php';</script>";
            die();
      }else{
            	setcookie("email", $email);
              header("Location: Servico.php");
      }
    }
?>


			