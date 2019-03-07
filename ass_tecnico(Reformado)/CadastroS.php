
<?php 

//conexao banco
$con = mysqli_connect(
	"localhost",
	"root",
	"",
	"assistenciatec"
);


if(isset($_POST['bntCad'])){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$modeloeq = $_POST['modeloeq'];
	$descricao = $_POST['descricao'];

	$sql = "INSERT INTO cadservico ( nome, email, modeloeq, descricao)
		VALUES
	('".$nome."', '".$email."', '".$modeloeq."', '".$descricao."')";
	$query = mysqli_query($con, $sql);

	if($query){
		echo" <script>  alert('Cadastro realizado com sucesso !');window.location.href='servico.php'; </script>	 ";
	}else{
		echo" <script>  alert('Nao foi cadastrado!');window.location.href='servico.php'; </script>	 ";
	}
}

 ?>
