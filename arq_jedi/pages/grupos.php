<?php include '../login/vefuser.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos</title>
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
            <!--Resumo do que se trata essa pagina-->
            <h2>Grupos Conhecidos</h2>
            <img src="../imagens/mando.jpg" alt="Foto Mandalorianos" width="450px">
            <p>Lorem Ipsum</p>
        </section>
    </div>

    <div>
        <section>
            <!--Link que levara a sequencia da pagina-->
            <h3>Lista de Grupos</h3>
            <p>Lorem Ipsum</p>
            <a href="grupos2/intro.php">Ir a lista de grupos</a>
        </section>
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