<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta charset=utf-8>
    <!-- Arquivos CSS -->
    <link href="css/estilo.css" rel="stylesheet">


<?php

// bloco de validação do banco de dados
if(file_exists("config/init.php")) {
	require "config/init.php";		
} else {
	echo "Arquivo init.php nao foi encontrado";
	exit;
}

if(!function_exists("Abre_Conexao")) {
	echo "Erro o arquivo init.php foi auterado, nao existe a função Abre_Conexao";
	exit;
}

session_start();
 
require_once 'config/init.php';

require 'check.php';

// bloco de consulta e estrutura de repetição do banco de dados
Abre_Conexao();
$re = mysql_query("SELECT * FROM usuarios; ");
if(mysql_errno() != 0) {
	if(!isset($erros)) {
		echo "Erro o arquivo init.php foi auterado, nao existe $erros";
		exit;
	}
	echo $erros[mysql_errno()];
	exit;
}
?>

<?php
// bloco de resultado e html da tabela
while($l = mysql_fetch_array($re)) {
	$id          = $l["id_usuario"];
	$nome        = $l["nome"];
	$email       = $l["email"];
	$telefone    = $l["telefone"];
	
echo "
	
	<div class='tabela'>
	<div class='exibe_acoes'><a href=\"excluir.php?id=$id\">[Inativar]</a></div>
	<div class='exibe_nome'>&nbsp;$nome</div>
	<div class='exibe_email'>&nbsp;$email</div>
	<div class='exibe_telefone'>&nbsp;$telefone</div>
	</div>


	</tr>\n";
}	
@mysql_close();
?>	
 <a href="view/logout.php">
                            <span class="menu-item">SAIR</span>
                        </a>