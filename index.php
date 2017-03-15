
<!-- Validador PHP -->
<?php
if(file_exists("includes/init.php")) {
	require "includes/init.php";		
} else {
	echo "Arquivo init.php nao foi encontrado";
	exit;
}

if(!function_exists("Abre_Conexao")) {
	echo "Erro o arquivo init.php foi auterado, nao existe a função Abre_Conexao";
	exit;
}

?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<title>Curso de Terapia Manual</title>

		

		<!-- Adaptado para Ipad -->
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<!-- Metas do facebook -->
		<meta property="og:locale" content="pt_BR">
		<meta property="og:title" content="Nome do curso" />
		<meta property="og:description" content="Descricao do curso." />
		<meta property="og:url" content="http://linkdosite" />
		<meta property="og:image" content="fb_curso1.jpg" />
		<meta property="og:image" content="fb_curso2.jpg" />
		<meta property="og:image" content="fb_curso3.jpg" />
		<meta property="og:type" content="website">

		<!-- Metas do Google -->
		<meta name="description" content="Descricao" xml:lang="pt-BR" lang="pt-BR" />
		<meta name="keywords" content="Palavraa chaves " xml:lang="pt-BR" lang="pt-BR" />
		<meta name="expires" content="never" />

		<!-- Google analytics-->




	</head>
	<!-- Form PHP -->
<form id="form1" name="form1" method="post" action="includes/salvar.php">
	<body>

<div class="imgfull">

<!-- Topo -->
<div class="topo">
	<div class="topo_meio">
		<div class="topo1_sport">
			<img src="img/sport_training.png">
		</div>
		<div class="topo2_logo">
			<img src="img/terapia_manual.png">
		</div>
		<div class="topo3_social">
			<img src="img/facebook.png">
			<img src="img/insta.png">
			<img src="img/youtube.png">
			<img src="img/google.png">
			<span>Fone: (43) 3024-5654</span>
		</div>
	</div>
</div>

<!-- Conteudo -->
<div class="conteudo">
	<div class="conteudo_meio">

		<!-- Bloco 1 Conteudo -->
		<div class="conteudo1_palestra">
		<span>Apresentação</span>
		Nos últimos anos em todo o mundo a corrida de rua passou a ser uma das modalidades de exercícios mais procuradas pela sociedade como meio de promoção de saúde e melhora do condicionamento físico. No Brasil, a corrida de rua é praticada atualmente por mais de 5 milhões de pessoas, apesar disso, os meios de comunicação divulgam que apenas 20% dos praticantes procuram qualquer meio de orientação. Essa é uma constatação importante, pois o número de pessoas que apresentam quadro de lesões ao praticarem a corrida de rua de forma empírica, aumentou muito nos últimos anos.

<div class="conteudo1_lista">
<span>Palestrante:<br>Prof. Dr. Antonio Carlos Gomes</span>
	<li>
		<svg class="svg_tick" viewBox="0 0 20 20">
		<path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path></svg>
		Dr. em Treinamento Desportivo
	</li>

	<li>
		<svg class="svg_tick" viewBox="0 0 20 20">
		<path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path></svg>
		Diretor Técnico da Sport Training
	</li>

	<li>
		<svg class="svg_tick" viewBox="0 0 20 20">
		<path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path></svg>
		Superintendente de Alto Rendimento da CBAt
	</li>

	<li>
		<svg class="svg_tick" viewBox="0 0 20 20">
		<path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path></svg>
		Consultor da ABT/COB
	</li>

	<li>
		<svg class="svg_tick" viewBox="0 0 20 20">
		<path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path></svg>
		Docente de cursos de Pós-Graduação
	</li>

</div>
</div>



<!-- Bloco 2 Conteudo -->
<div class="conteudo2_formulario">
	<span>Quer saber mais ?</span>
	
					<input  name="nome" id="nome" type="text" placeholder="Nome" required>
			
					<input  name="email" id="email" type="email" placeholder="Email" required>
			
					<input name="telefone"  id="telefone" type="text" placeholder="Telefone" required>

	<div class="bt"><input type="submit" name="Submit" value="Enviar &#10230;"></div>
	</form>
</div>
</div>
</div>

<!-- Logo DG -->
<div class="dg">
<svg class="svg_dg"  id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 191.03 191.03"><defs><style>.cls-1{fill:#fff;}</style></defs><title>dg</title><path class="cls-1" d="M122.78,101.39h16.89a17.93,17.93,0,1,1-5-19.43l8-9A29.92,29.92,0,0,0,94.9,84.54,30,30,0,0,0,67,65.46H37.23v59.85H67A30,30,0,0,0,94.9,106.23a29.92,29.92,0,0,0,57.81-10.84v-6H122.78ZM67,113.31H49.23V77.46H67a17.93,17.93,0,1,1,0,35.85Z"/><path class="cls-1" d="M176.88,145.49a95.58,95.58,0,1,0-31.47,31.44L185,185ZM12,95.51A83.51,83.51,0,1,1,95.51,179,83.61,83.61,0,0,1,12,95.51Z"/></svg>
</div>

</div>
</body>
</html>

<!-- Links / Arquivos -->
<link href="css/geral.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">