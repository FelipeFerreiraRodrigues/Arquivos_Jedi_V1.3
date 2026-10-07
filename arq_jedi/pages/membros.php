<?php include '../login/vefuser.php';
include '../database/function.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membros Ordem Jedi</title>
</head>
<body>
    <section>
        <?php
        //Aqui é o header
        include '../headerfooter/header.php';
        ?>
    </section>

    <div>
        <section>
            <?php
            //Aqui é a barra lateral
            include '../headerfooter/aside.php'
            ?>
        </section>
    </div>

    <div>
        <section>
            <!--Explicação do que a pagina se trata-->
            <h2>Membros da Ordem Jedi</h2>
            <img src="../imagens/altarepub2.jpg" alt="Membros Ordem Jedi" width="500px">
            <p>Aqui se encontram os registros de cada membro da Ordem Jedi que possui acesso aos Arquivos Jedi</p>
        </section>
    </div>

    <div>
        <section>
            <?php
            $usuarios = listuser($conexao);

            foreach ($usuarios as $user) {
                echo "<hr>ID: " . $user['id'] . " - Email: " . $user['email'] . "<br>";
            }
            ?>
        </section>
    </div>

    <div>
        <section>
            <!--Aqui levará a outra pagina que mostrará os membros inseridos-->
            <h3>Lista de Membros da Ordem</h3>
            <p>Lorem Ipsum</p>
            <a href="">Link sem direção</a>
        </section>
    </div>

    <div>
        <section>
            <?php
            //Aqui é o footer
            include '../headerfooter/footer.php';
            ?>
        </section>
    </div>
</body>
</html>