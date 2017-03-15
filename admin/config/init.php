<?php
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '123456');
define('DB_NAME', 'lp');
 
// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
 
// inclui o arquivo de funções
require_once 'controler/functions.php';

 error_reporting(E_ALL);
@ini_set('display_errors', '1');
@ini_set('register_globals', '0');
if (version_compare(phpversion(), "4", ">")) { 
	if (!extension_loaded('mysql')) {
		echo( "Nao esta habilitada a dll Mysql" );
		exit;
	}					
} 

// arquivo de conexão do "listar"
if(file_exists("config/config.php")) {			
	include "config/config.php";

	if (!defined("SERVIDOR") or !defined("USUARIO") or !defined("SENHA") or !defined("BANCO")){
		echo "Variaveis de conexao nao definidas, configure corretamente o arquivo config.php";
		exit;
	}
}

// controle de erro incluindo o arquivo "funções"
$erros[2005] = "Esse servidor nao existe";
$erros[2003] = "Servidor Mysql desligado";
$erros[1045] = "Usuario ou senha invalido";
$erros[1049] = "Banco de dados nao encontrado";
$erros[1146] = "Erro de sql a tabela nao existe";
$erros[1062] = "Erro campo unico na tabela, nao pode cadastrar pois ele ja existe";

function Abre_Conexao() {	
	global $erros;
	@mysql_connect(SERVIDOR, USUARIO, SENHA);
	if(mysql_errno() != 0) {
		echo $erros[mysql_errno()];	
		exit;	
	}	
	@mysql_select_db(BANCO);		
	if(mysql_errno() != 0) {
		echo $erros[mysql_errno()];	
		exit;
	}		
}
?>