<?php
  error_reporting(0);
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if (isset($_POST['nome'])) {

    include_once'ClienteDAO.PHP';
      include_once'Cliente.php';
      $Insere = new ClienteDAO();
      $Usuario = new Cliente();


      $Usuario->setNome($nome);
      $Usuario->setEmail($email);
      $Usuario->setSenha($senha);

      $Insere->InsereCliente($Usuario);

  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Assistencia tecnica</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
	</style>
	<script type="text/javascript">
		var i = 0;
		var images = [];
        var tempo = 4000;

        images[0] = "img/01.png";
        images[1] = "img/02.png";
        images[2] = "img/03.png";

        function slideshow() {
        	document.slide.src = images[i];
        	if (i < images.length - 1) {
        		i++;
        	}else{
        		i - 0;
        	}

        	setTimeout("slideshow()", tempo);
        }
        window.onload = slideshow;
	</script>
</head>
<body>
	<input type="checkbox" id="bt-menu"> 
	<label for="bt-menu">&#9776;</label>
	<nav class="menu" id="menu">
	    <ul>
	   		<li><a href="#">HOME</a></li>
	   		<li><a href="#bg2">CADASTRAR</a></li>
  			<li><a href="#qs">QUEM SOMOS?</a></li>
		  </ul>
</nav>
<hr class="separacao">	
<div class="slide">
	<h1>CONHEÇA NOSSOS<br>SERVIÇOS</h1><br><br>
	<label>Trabahamos com diversos tipos de equipamentos eletrônicos.<br>&nbsp;&nbsp;&nbsp;&nbsp;Manutenção de computadores, celulares, tablets e muito mais</label>
	<br><br><br><br>
	<a href="#bg">LOGIN</a>
	<img name="slide" width="435px" height="303px">
</div>
<hr class="separacaobv">
<div class="bv">
	<center>
		<br>
		<label>
			Bem-Vindo ao 
			<strong>
				nosso site
			</strong>
		</label>
		<br>
		<hr>
		<br>
		<p>
			Temos estrutura para efetuar consertos no ato do recebimento do equipamento.
			<br><br>
			Trabalhamos com atendimento personalizado, preços competitivos, priorizando comodidade e qualidade.
		</p>
	</center>
</div>
<hr>
<div class="descricao" id="qs">
	<figure>
		<img src="img/cf.jpg" width="100%" height="400px">
		<figcaption>
			<br>
			<label>
				<br>
				Quem somos?
				<br>
				<hr>
				<br>
				<p>
					<br><br>
					Somos uma empresa de assistência técnica de produtos eletrônicos, fazemos atendimentos
					técnicos.
					<br><br>
					O nosso diferencial é a qualidade na prestação de serviços, e o nosso publico alvo são pessoas que tem equipamentos que apresentam algum tipo de
					defeito.
				</p>
			</label>
			<br>
			<hr>
		</figcaption>
	</figure>
</div>
<div class="descricao2">
	<figure>
		<img src="img/qs.jpg" width="100%" height="400px">
		<figcaption>
			<br>
			<label>
				<br>
				Como funcionamos?
				<br>
				<hr>
				<br>
				<p>
					<br><br>
					Assistência técnica especializada em produtos eletrônicos, trabalhamos para diversos tipos de pessoa física ou jurídica.
					<br><br>
					Oferecemos um ambiente onde meus clientes possam acompanhar a ordem de serviço
					relacionada ao seu equipamento.
				</p>
				<br><br><br>
				<a href="#bg2" style="margin-top: -100px;">CADASTRE-SE</a>
			</label>
			<br>
			<hr>
		</figcaption>
	</figure>
</div>
<div class="fim">
	<div class="nave">
    <br>
    <br>
    <h6>
      NAVEGAÇÃO
    </h6>
    <hr><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">HOME</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">SERVIÇOS</a></label><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">ORDEM DE SERVIÇOS</a></label><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">CADASTRO</a></label><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#bg">LOGIN</a></label>
  <br><br><br><br>
  </div>
  <div class="servi">
      <br>
      <br>
      <h6>
        SERVIÇOS
      </h6>
      <hr><br>
      <label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manutenção de Computadores<br> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manutenção de impressoras<br> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Celulares<br> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xTablets
      </label>
    <br><br><br><br>
  </div>
  <div class="contatos">
    <br>
    <br>
    <h6>
      CONTATOS
    </h6>
    <hr><br>
    <label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fone: (84)99425-3418 <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fone-2: (11)97085-3663<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail: <a href="#">takeshioficial@gmail.com</a><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail-2: <a href="#">bezerrajessica034@gmail.com</a>
  </label>
    <br><br><br><br>
  </div>
</div>
  <div id="bg"></div>
  <div class="modal">
    <div class="login" style="width: 100%; height: 100%; background: #d5d6e8;">
      <form action="Login.php" method="post">
      <a href="index.php" id="close">X</a>
      <br>
      <h1>LOGIN</h1>
      <input type="text" name="email" placeholder="Digite seu e-mail" maxlength="100" required="" autofocus="">
      <input type="password" name="senha" placeholder="Digite sua senha" maxlength="100" required="" autofocus="">
      <input type="submit" id="btnLogin" name="btnLogin" value="Entrar">
      <center>
      <a href="Login_Func.php">Você é um funcionário? Acesse aqui.  
      </a>
    </center>
    <br><br>
      </form>
    </div>
  </div>


  <div id="bg2"></div>
  <div class="modal2">
    <div class="cadastro" style="width: 100%; height: 100%; background: #d5d6e8;">
      <a href="index.php" id="close2">X</a>
      <br>
      <h1>CADASTRE-SE</h1>
    <form method="post">
      <input type="text" name="nome" class="campo" placeholder="Digite seu nome" maxlength="100" required="" autofocus=""></h1>
      <input type="email" name="email" class="campo" placeholder="Digite seu email" maxlength="100" required="" autofocus=""></h1>
      <input type="password" name="senha" class="campo" placeholder="Digite sua senha" maxlength="100" required="" autofocus=""></h1>
      <input type="submit" value="Salvar" class="bnt" href="#menu">
      <input type="reset" value="Limpar" class="bnt">
      <br><br>
      <center>
      <a href="#">Você é um funcionário? Acesse aqui.  
      </a>
    </center>
    </form>
    </div>
  </div>
</body>
</html>