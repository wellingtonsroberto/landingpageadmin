<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$nome         = $_POST["nome"];
$email        = $_POST["email"];
$telefone     = $_POST["telefone"];

if(file_exists("init.php")) {
	require "init.php";		
} else {
	echo "Arquivo init.php nao foi encontrado";
	exit;
}

if(!function_exists("Abre_Conexao")) {
	echo "Erro o arquivo init.php foi auterado, nao existe a fun��o Abre_Conexao";
	exit;
}

Abre_Conexao();
if(@mysql_query("INSERT INTO usuarios VALUES (	NULL , '$nome', '$email', '$telefone')")) {

	if(mysql_affected_rows() == 1){
		echo "Registro efetuado com sucesso<br />";
	}	

} else {
	if(mysql_errno() == 1062) {
		echo $erros[mysql_errno()];
		exit;
	} else {	
		echo "Erro nao foi possivel efetuar o cadastro";
		exit;
	}	
	@mysql_close();
}

}
?>
<meta http-equiv="refresh" content=1;url="http://antoniocgomes.com/cursos.php">