<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login do funcionário</title>
	<link rel="stylesheet" type="text/css" href="css/L_func.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		var idfunc = "LucasTakeshi01";
		var senha = "l1u2c3a4s5";

		var idfunc1 = "JessicaBezerra02";
		var senha1 = "dipirona";

		var idfunc2 = "EmiliaDaves03";
		var senha2 = "dipirona1";

		var idfunc3 = "MariaJoziane04";
		var senha3 = "dipirona2";

		function Logar() {
			
			if ($("#idfunc").val() == idfunc && $("#senha").val() == senha) {
				alert('Seja bem vindo(a), Lucas Takeshi!');
				window.location.href="Funcionario.php";
			}else if ($("#idfunc").val() == idfunc1 && $("#senha").val() == senha1) {
				alert('Seja bem vindo(a), Jessica Bezerra!');
				window.location.href="Funcionario.php";
			}else if ($("#idfunc").val() == idfunc2 && $("#senha").val() == senha2) {
				alert('Seja bem vindo(a), Emilia Daves!');
				window.location.href="Funcionario.php";
			}else if ($("#idfunc").val() == idfunc3 && $("#senha").val() == senha3) {
				alert('Seja bem vindo(a), Maria Josiane!');
				window.location.href="Funcionario.php";
			}else{
				alert('Desculpe!  \nLogin ou/e senha incorretos');
				window.location.href='Login_Func.php';
			}
		}

	</script>
</head>
<body>
	<div class="login">
		<br>
		<h1>acesso do funcionário</h1>
		<br>
			<input type="text" id="idfunc" name="idfunc" placeholder="Identificação do funcionário">
			<input type="password" id="senha" name="senha" placeholder="Informe sua senha">
			<br>
			<input type="submit" id="btnLogin" name="btnLogin" value="Entrar" onclick="Logar()">
	</div>
</body>
</html>
