<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dados do aluno</title>

</head>

<body>

    <h1>Dados do Aluno</h1>
    <h4>
        <?php
        echo "*&nbsp;Dados pessoais: <br>";
        foreach ($alunos as $a) {
            echo '<hr>';
            echo '&emsp;-&nbsp;Nome: ' . $a->nome . '<br>';
            echo '&emsp;-&nbsp;Email: ' .  $a->email . '<br>';
            echo '&emsp;-&nbsp;Idade: ' . $a->idade . ' anos<br>';
            echo '&emsp;-&nbsp;Numero de matricula: ' . $a->numero_matricula . '<br>';
            echo '&emsp;-&nbsp;Nome do responsavel: ' . $a->nome_responsavel . '<br>';
            echo '&emsp;-&nbsp;Turma: ' . $a->serie . '° ano ' . $a->nomeTurma . '<br>';
        }

        echo "<br><br> *&nbsp;Disciplinas realizadas: <br><hr>";

        foreach ($alunosDadosAdicionais as $ada) {
            echo "&emsp;-&nbsp;" . $ada->nomeDisc . "<br>";
        }

        ?>

        <br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style="cursor:pointer;background-color: gray; color:black;">Voltar para Menu</button></a>

    </h4>

</body>

</html>