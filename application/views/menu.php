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
		&emsp;<a href="<?php echo site_url('Controlador/selecionar/aluno'); ?>"><button style='cursor:pointer;background-color: orange;color:white;'>Consultar</button></a>
		&emsp;<a href="<?php echo site_url('Controlador/cadastrar/aluno'); ?>"><button style='cursor:pointer;background-color: green;color:white;'>Cadastrar</button></a>
		&emsp;<a href="<?php echo site_url('Controlador/remover/aluno'); ?>"><button style='cursor:pointer;background-color: red;color:white;'>Remover</button></a>
		&emsp;<a href="<?php echo site_url('Controlador/atualizar/aluno'); ?>"><button style='cursor:pointer;background-color: blue;color:white;'>Atualizar</button></a>
	</h3>

	<br>
	<h3><u>Professores</u>
		&emsp;<a href="<?php echo site_url('Controlador/selecionar/professor'); ?>"><button style='cursor:pointer;background-color: orange;color:white;'>Consultar</button></a>
		&emsp;<a href="<?php echo site_url('Controlador/cadastrar/professor'); ?>"><button style='cursor:pointer;background-color: green;color:white;'>Cadastrar</button></a>
		&emsp;<a href="<?php echo site_url('Controlador/remover/professor'); ?>"><button style='cursor:pointer;background-color: red;color:white;'>Remover</button></a>
		&emsp;<a href="<?php echo site_url('Controlador/atualizar/professor'); ?>"><button style='cursor:pointer;background-color: blue;color:white;'>Atualizar</button></a>
	</h3>

	<br>
	<h3><u>Turmas</u>
		&emsp;<a href="<?php echo site_url('Controlador/cadastrar/turma'); ?>"><button style='cursor:pointer;background-color: green;color:white;'>Cadastrar</button></a>
	</h3>

	<br>
	<h3><u>Disciplinas</u>
		&emsp;<a href="<?php echo site_url('Controlador/cadastrar/disciplina'); ?>"><button style='cursor:pointer;background-color: green;color:white;'>Cadastrar</button></a>
	</h3>

</body>

</html>