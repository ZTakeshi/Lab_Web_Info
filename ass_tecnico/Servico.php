<?php
  
  $parametro = filter_input(INPUT_GET, "parametro");
  $conexao = mysqli_connect('localhost','root','');
  $banco = mysqli_select_db($conexao, 'assistenciatec');

  if ($parametro) {
      $information = mysqli_query($conexao, "SELECT * FROM `ordemservico` WHERE 1");
    }else{
      $information = mysqli_query($conexao, "select * from ordemservico order by modeoeq");
    }

    $linha = mysqli_fetch_assoc($information);
    $total = mysqli_num_rows($information);
?>
<!DOCTYPE html>
<html lang="pt-br">

	<meta charset="utf-8">
	<title>Nossos serviços</title>
	<link rel="stylesheet" type="text/css" href="css/servico.css">

<script type="text/javascript">
		var i = 0;
		var images = [];
        var tempo = 4000;

        images[0] = "img/s1.png";
        images[1] = "img/s2.png";
        images[2] = "img/s3.png";


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
<body>
	<input type="checkbox" id="bt-menu"> 
	<label for="bt-menu">&#9776;</label>

	<nav class="menu">
	    <ul>
			<li>
				<a href="#">HOME</a>
			</li>
			<li>
				<a href="#">SERVIÇOS</a>
			</li>
			<li>
				<a href="#bg2">SUA ORDEM</a>
			</li>
		</ul>
    </nav>
    <hr class="separacao">
    <div class="servico">
    	
    	<h1><br>ORDEM DE SERVIÇOS<br></h1><br><br>
	<label>Aqui no nosso site você tem a possibilidade de cadastrar novos serviços,<br>&nbsp;&nbsp;&nbsp;&nbsp;Acessar a sua ordem de serviço e muito mais</label>
	<br><br><br><br>
	<a href="#bg">CADASTRAR SERVIÇOS</a>
	<img name="slide" width="435px" height="303px">
    </div>
    <hr class="separacaobv">
    <div class="bvc">
    	<center>
		<br>
		<label>
			Seja Bem-Vindo 
			<strong>
				querido cliente
			</strong>
		</label>
		<br>
		<hr>
		<br>
		<p>
			Olá, possui serviços para realizar o cadastro no site? 
			<br><br>
			Aqui no nosso site você consegue ficar por dentro de como anda o seu serviço e tudo mais
		</p>
	</center>
    </div>
<div class="c1">
	<figure>
		<img src="img/c1.png" width="100px" height="100px">
		<figcaption>
			<br>
			<label>
				<br>
				Atendimento
				
				<hr>
				
				<p>
					<br>
					Trabalhamos de segunda a sabado apartir das 7:00 às 17:00
					<br><br>
				</p>
			</label>
			<br>
		</figcaption>
	</figure>
</div>
<div class="c2">
	<figure>
		<img src="img/c2.png" width="150px" height="100px">
		<figcaption>
			<br>
			<label>
				<br>
				Aparelhos

				<hr>
				
				<p>
				<br>
					LENOVO, MOTOROLA, SAMSUNG, POSITIVO, APPLE, LG, etc...<br>
					Temos assistência para todos os modelos de celulares, tablet e notebook. 
										<br><br>
				</p>
			</label>
			<br>
		</figcaption>
	</figure>
</div>
<div class="c3">
	<figure>
		<img src="img/C3.png" width="100px" height="100px">
		<figcaption>
			<br>
			<label>
				<br>
				Contatos


				<hr>
				
				<p>
				<br>
					E-mails: ejlmanuteções@gmail.com<br>
					Telefone: (84)96574-5534
					<br><br>
				</p>
			</label>
			<br>
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
  <hr>
  <br>
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
    <div class="cadastro" style="width: 100%; height: 100%; background: #d5d6e8;">
      <a href="#menu" id="close">X</a>
      <br>
      <h1>CADASTRE SEU SERVIÇO</h1>
    <form action="CadastroS.php" method="post">
      <input type="text" name="nome" class="campo" placeholder="Digite seu nome" maxlength="100" required="" autofocus=""></h1>
      <input type="email" name="email" class="campo" placeholder="Digite seu email" maxlength="100" required="" autofocus=""></h1>
      <input type="text" name="modeloeq" class="campo" placeholder="Digite seu modelo" maxlength="100" required="" autofocus=""></h1>
       <input type="text" name="descricao" class="campo" placeholder="Digite seu descricao" maxlength="100" required="" autofocus=""></h1>
      <input type="submit" value="Salvar" name="bntCad" class="bnt" href="#menu">
      <input type="reset" value="Limpar" class="bnt">
      <br><br>
    </form>
    </div>
  </div>

  <div id="bg2"></div>
  <div class="modal2">
    <div class="ordems" style="width: 100%; height: 100%; background: #d5d6e8;">
      <a href="Servico.php" id="close2">X</a>
      <center>
        <br><br><br>
        <h1>ORDENS DE SERVIÇOS</h1>
        <table border="1" id="infocad">
      <tr>
        <th>
          Modelo do equipamento
        </th>
        <th>
          Descrição do defeito
        </th>
        <th>
          Tempo de conserto
        </th>
      </tr>
      <?php 
      if ($total) { do{
        
    ?>
    <tr>
      <td>
        <?php echo $linha['modeoeq']; ?>
      </td>
      <td>
        <?php echo $linha['descricao']; ?>
      </td>
      <td>
        <?php echo $linha['tempo']; ?>
      </td>
    </tr>
    <?php
      } while ($linha = mysqli_fetch_assoc($information)); 
        
        mysqli_free_result($information);}
      mysqli_close($conexao);
    ?>  
    </table>
      </center>

    </div>
  </div>
</form>
</body>
</html>