<?php
//conexao banco
$con = mysqli_connect(
	"localhost",
	"root",
	"",
	"assistenciatec"
);


if(isset($_POST['btnCadOS'])){

	$modeloeq = $_POST['modeloeq'];
	$descricao = $_POST['descricao'];
	$tempo = $_POST['tempo'];

	$sql = "INSERT INTO ordemservico ( modeoeq, descricao, tempo)
		VALUES
	('".$modeloeq."', '".$descricao."', '".$tempo."')";
	$query = mysqli_query($con, $sql);

	if($query){
		echo" <script>  alert('Ordem montada com sucesso!');window.location.href='Funcionario.php'; </script>	 ";
	}else{
		echo" <script>  alert('Nao foi possível montar a ordem!');window.location.href='Funcionario.php'; </script>	 ";
	}
}

 ?>
