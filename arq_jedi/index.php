<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos Ordem Jedi</title>
</head>
<body>
    <section>
        <?php
        //Aqui ficará o header da página
        include 'headerfooter/header.php';
        ?>
    </section>

    <div>
        <section>
            <?php
            //Aqui ficará a barra de navegação lateral
            include 'headerfooter/aside.php'
            ?>
        </section>
    </div>

    <div>
        <section>
            <!--Aqui será uma espécie de "Sobre nós"-->
            <h2>Bem-Vindo aos Arquivos Jedi!</h2>
            <img src="imagens/altarepub.jpeg" alt="Jedis Alta República" width="500px">
            <p>Lorem Ipsum</p>
        </section>
    </div>

    <div>
        <section>
            <?php
            //Aqui ficará o footer da pagina
            include 'headerfooter/footer.php';
            ?>
        </section>
    </div>

</body>
</html>