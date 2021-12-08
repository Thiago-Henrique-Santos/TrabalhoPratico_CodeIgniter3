<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dados do professor</title>

</head>

<body>

    <h1>Dados do Professor</h1>
    <h4>
        <?php
        echo "*&nbsp;Dados pessoais: <br>";
        foreach ($professores as $p) {
            echo '<hr>';
            echo '&emsp;-&nbsp;Nome: ' . $p->nome . '<br>';
            echo '&emsp;-&nbsp;Email: ' .  $p->email . '<br>';
            echo '&emsp;-&nbsp;MASP: ' . $p->masp . '<br>';
        }

        echo "<br><br> *&nbsp;Turmas e respectivas disciplinas ministradas: <br><hr>";

        foreach ($professoresDadosAdicionais as $pda) {
            echo "&emsp;-&nbsp;" . $pda->serie . "° ano " . $pda->nomeTurma . "&nbsp;&nbsp;->&nbsp;&nbsp;" . $pda->nomeDisciplina . "<br><br>";
        }
        ?>

        <br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style="cursor:pointer;background-color: gray; color:black;">Voltar para Menu</button></a>

    </h4>

</body>

</html>