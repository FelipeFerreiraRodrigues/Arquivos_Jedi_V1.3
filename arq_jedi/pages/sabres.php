<?php include '../login/vefuser.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabres</title>
</head>
<body>
    <section>
        <?php
        //Header da página
        include '../headerfooter/header.php';
        ?>
    </section>

    <div>
        <section>
            <?php
            //Barra lateral de acesso
            include '../headerfooter/aside.php';
            ?>
        </section>
    </div>

    <div>
        <section>
            <!--Resumo do que são os Sabres de luz-->
            <h2>Sabres de Luz</h2>
            <img src="../imagens/montsabre.png" alt="Montando Sabre de luz" width="400px">
            <p>Lorem Ipsum</p>
        </section>
    </div>

    <div>
        <section>
            <?php
            //Footer da página
            include '../headerfooter/footer.php'
            ?>
        </section>
    </div>
</body>
</html>