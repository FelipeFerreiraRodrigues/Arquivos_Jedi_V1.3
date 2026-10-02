<?php include '../login/vefuser.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planetas</title>
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
            //Barra lateral de navegação
            include '../headerfooter/aside.php';
            ?>
        </section>
    </div>

    <div>
        <!--Resumo do que a pagina se trata-->
        <h2>Planetas Conhecidos</h2>
        <img src="../imagens/coruscant.jpg" alt="Planeta Coruscant">
        <p>Lorem Ipsum</p>
    </div>

    <div>
        <!--Levará a outra pagina-->
        <h3>Planetas Catalogados</h3>
        <p>Lorem Ipsum</p>
        <a href="planetas2/planread.php">Ir a lista de planetas</a>
    </div>

    <div>
        <section>
            <?php
            //Footer da pagina
            include '../headerfooter/footer.php'
            ?>
        </section>
    </div>
</body>
</html>