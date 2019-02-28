<?php
	error_reporting(0);
	$parametro = filter_input(INPUT_GET, "parametro");
	$conexao = mysqli_connect('localhost','root','');
  	$banco = mysqli_select_db($conexao, 'assistenciatec');

  	if ($parametro) {
  		$information = mysqli_query($conexao, "select * from cadservico where 1");
  		$informa = mysqli_query($conexao, "select nome, email from cadcliente where 1");
  	}else{
  		$information = mysqli_query($conexao, "select * from cadservico  order by nome");
  		$informa = mysqli_query($conexao, "select * from cadcliente  order by nome");
  	}

  	$linha = mysqli_fetch_assoc($information);
  	$total = mysqli_num_rows($information);
  	$rows = mysqli_fetch_assoc($informa);
  	$final = mysqli_num_rows($informa);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Apenas funcionários</title>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="css/T_func.css">
</head>
<body>
	<input type="checkbox" id="bt-menu"> 
	<label for="bt-menu">&#9776;</label>
	<nav class="menu" id="menu">
	    <ul>
	   		<li>
	   			<a href="#">HOME</a>
	   		</li>
	   		<li>
	   			<a href="#bg">CLIENTES</a>
	   		</li>
		  </ul>
	</nav>
	<hr class="separacao"></hr>
	<br>
	<br>
	<br>
	<center>
		<h1>SERVIÇOS CADASTRADOS</h1>
		<hr class="padrao"></hr>
		<br>
		<br>
		<table border="1" id="infocad">
		<tr>
			<th>
				Código do cadastro
			</th>
			<th>
				Cliente
			</th>
			<th>
				E-mail
			</th>
			<th>
				Modelo equipamento
			</th>
			<th>
				Descrição
			</th>
		</tr>
		<?php 
			if ($total) { do{
				
		?>
		<tr>
			<td>
				<?php echo $linha['idcadservico']; ?>
			</td>
			<td>
				<?php echo $linha['nome']; ?>
			</td>
			<td>
				<?php echo $linha['email']; ?>
			</td>
			<td>
				<?php echo $linha['modeloeq']; ?>
			</td>
			<td>
				<?php echo $linha['descricao']; ?>
			</td>
		</tr>
		<?php
			} while ($linha = mysqli_fetch_assoc($information)); 
				
				mysqli_free_result($information);}
			mysqli_close($conexao);
		?>
	</table>
	<br>
	<br>
	<div class="ordems">
			<h1>MONTAR ORDEM</h1>
			<hr class="padrao2"></hr>
		<br>
		<form action="cadastroOS.php" method="post">
			<input type="text" name="modeloeq" placeholder="Informe o modelo do equipamento">
			<input type="text" name="descricao" placeholder="Informe o defeito do equipamento">
			<input type="text" name="tempo" placeholder="Informe o tempo de conserto">
			<input type="submit" name="btnCadOS" value="Entrar">
		</form>
	</div>
	</center>
	
  <div id="bg"></div>
  <div class="modal">
    <div class="clientes" style="width: 100%; height: 100%; background: #d5d6e8;">
      <a href="Funcionario.php" id="close">X</a>
      <center>	
      	<br><br><br>
      	<h1>NOSSOS CLIENTES</h1>
      	<table border="1" id="infocad">
			<tr>
				<th>
					Cliente
				</th>
				<th>
					E-mail
				</th>
			</tr>
			<?php 
			if ($final) { do{
				
		?>
		<tr>
			<td>
				<?php echo $rows['nome']; ?>
			</td>
			<td>
				<?php echo $rows['email']; ?>
			</td>
		</tr>
		<?php
			} while ($rows = mysqli_fetch_assoc($informa)); 
				
				mysqli_free_result($informa);}
			mysqli_close($conexao);
		?>	
		</table>
    </center>
    <br><br>
    </div>
  </div>

</body>
</html>