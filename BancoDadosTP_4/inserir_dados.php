<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "BD_TP_4";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error)
    die("Conexão falhou: " . $conexao->connect_error);

//Professores
$sql = "INSERT INTO professor (id, nome, email, masp, senha) VALUES (1, 'Caio Silva', 'caio@escola.com', '12345678', '1234567891');";
$sql .= "INSERT INTO professor (id, nome, email, masp, senha) VALUES (2, 'Fátima Pereira', 'fatima.pereira@escola.com', '91871342', '8761524314');";
$sql .= "INSERT INTO professor (id, nome, email, masp, senha) VALUES (3, 'Leandro Gouvea', 'leandro@escola.com', '12345612', '0012345600');";
$sql .= "INSERT INTO professor (id, nome, email, masp, senha) VALUES (4, 'Mariana Silva', 'mariana@escola.com', '91871322', '7123451600');";
$sql .= "INSERT INTO professor (id, nome, email, masp, senha) VALUES (5, 'Silvio Favila', 'silvio@escola.com', '22145019', '9765411231');";

//Turmas
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (2, 'A', 2);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (3, 'B', 2);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (4, 'A', 3);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (5, 'B', 3);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (6, 'A', 4);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (7, 'B', 4);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (8, 'C', 4);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (9, 'A', 5);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (10, 'B', 5);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (11, 'C', 5);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (12, 'D', 5);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (13, 'A', 7);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (14, 'B', 7);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (15, 'C', 7);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (16, 'A', 8);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (17, 'B', 8);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (18, 'A', 9);";
$sql .= "INSERT INTO turma (id, nome, serie) VALUES (19, 'Z', 9);";

//Alunos
$sql .= "INSERT INTO aluno (id, nome, email, idade, numero_matricula, nome_responsavel, senha, id_turma) VALUES (1, 'Ana Beatriz Montes', 'ana.beatriz@escola.com', 14, '1234567', 'Vera Montes', '0156181456', 2);";
$sql .= "INSERT INTO aluno (id, nome, email, idade, numero_matricula, nome_responsavel, senha, id_turma) VALUES (2, 'Silvia Francele', 'silvia@escola.com', 17, '1987651', 'Iris Francele', '6145128910', 5);";
$sql .= "INSERT INTO aluno (id, nome, email, idade, numero_matricula, nome_responsavel, senha, id_turma) VALUES (3, 'Gabriely Silveira', 'gabriely@escola.com', 12, '0234522', 'Simone Silveira', '3455120091', 7);";
$sql .= "INSERT INTO aluno (id, nome, email, idade, numero_matricula, nome_responsavel, senha, id_turma) VALUES (4, 'Josias Paiva', 'josias@escola.com', 11, '22114423', 'Carlos Paiva', '1971456177', 5);";
$sql .= "INSERT INTO aluno (id, nome, email, idade, numero_matricula, nome_responsavel, senha, id_turma) VALUES (5, 'Gustavo Borges', 'gustavo@escola.com', 10, '4431871', 'Henrique Borges', '8875441320', 3);";

//Disciplina
$sql .= "INSERT INTO disciplina (id, nome, ano, id_professor, id_turma) VALUES (1, 'Portugues', '2021', 4, 2);";
$sql .= "INSERT INTO disciplina (id, nome, ano, id_professor, id_turma) VALUES (2, 'Portugues', '2021', 4, 3);";
$sql .= "INSERT INTO disciplina (id, nome, ano, id_professor, id_turma) VALUES (3, 'Educacao Fisica', '2021', 1, 5);";
$sql .= "INSERT INTO disciplina (id, nome, ano, id_professor, id_turma) VALUES (4, 'Matematica', '2021', 2, 5);";
$sql .= "INSERT INTO disciplina (id, nome, ano, id_professor, id_turma) VALUES (5, 'Geografia', '2021', 3, 7);";
$sql .= "INSERT INTO disciplina (id, nome, ano, id_professor, id_turma) VALUES (6, 'Educacao Fisica', '2021', 1, 7);";
$sql .= "INSERT INTO disciplina (id, nome, ano, id_professor, id_turma) VALUES (7, 'Historia', '2021', 5, 4);";
$sql .= "INSERT INTO disciplina (id, nome, ano, id_professor, id_turma) VALUES (8, 'Historia', '2021', 5, 8)";

if ($conexao->multi_query($sql) === TRUE)
    echo "<br>Cadastros inseridos com sucesso";
else
    echo "Erro inserindo cadastros: " . $conexao->error;

$conexao->close();
