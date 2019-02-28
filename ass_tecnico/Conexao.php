<?php 
class  Conexao {
	
	public function Conexao() {
	try {
	
		$pdo = new PDO('mysql:host=localhost; dbname=assistenciatec','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	
	} catch (Exception $e) {
	
		echo $e.getMessage();
	
	}
	
		return $pdo;
	
	}

}


 ?>