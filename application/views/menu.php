<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Página inicial</title>
</head>

<body>

	<h1><strong><u>Página inicial do sistema</u></strong></h1> <br>
	<h2><strong>Consultas de registros</strong></h2> <br><br>

	<h3><u>Alunos</u>
		&emsp;<a href="<?php echo site_url('Controlador/selecionar/aluno'); ?>"><button style='cursor:pointer'>Consultar</button></a>
	</h3>

	<br>
	<h3><u>Professores</u>
		&emsp;<a href="<?php echo site_url('Controlador/selecionar/professor'); ?>"><button style='cursor:pointer'>Consultar</button></a>
	</h3>

</body>

</html>