<?php include '../login/vefuser.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espécies</title>
</head>
<body>
    <section>
        <?php
        //Header da pagina
        include '../headerfooter/header.php';
        ?>
    </section>

    <div>
        <section>
            <?php
            //Barra lateral da pagina
            include '../headerfooter/aside.php';
            ?>
        </section>
    </div>

    <div>
        <section>
            <!--Resumo do que se trata a pagina-->
            <h2>Espécies Conhecidas</h2>
            <img src="../imagens/especies.png" alt="Imagem Espécies Conhecidas" width="335px">
            <p>Aqui se encontram os registros de todas as espécies conhecidas <br> da galáxia, com seu nome popular, planeta de origem, idade <br> máxima estimada e verificação de sensitividade a Força de acordo <br> com o histórico conhecido.</p>
        </section>
    </div>

    <div>
        <section>
            <!--Continuação da pagina-->
            <h3>Lista de Espécies</h3>
            <p>Acesse abaixo a lista de espécies</p>
            <a href="especies2/espread.php">Ir a lista de Espécies</a>
        </section>
    </div>

    <div>
        <section>
            <?php
            //Footer da pagina
            include '../headerfooter/footer.php';
            ?>
        </section>
    </div>
</body>
</html>