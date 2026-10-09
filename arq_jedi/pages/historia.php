<?php include '../login/vefuser.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História</title>
</head>
<body>
    <section>
        <?php
        //Header da página
        include '../headerfooter/header.php'
        ?>
    </section>

    <div>
        <section>
            <?php
            //Barra lateral da página
            include '../headerfooter/aside.php'
            ?>
        </section>
    </div>

    <div>
        <section>
            <h2>História da Galáxia</h2>
            <img src="../imagens/novarepub.png" alt="Logo Nova República" width="250px">
            <p>A história da galáxia e seus governos é ponto fundamental de estudo de filósofos da Força, compreendendo assim ações cujo moldaram o rumo da galáxia ao seu bel prazer diante das consequências convergentes a essas ações tomadas pelos poderosos ou grandes massas.</p>
        </section>
    </div>
    
    <div>
        <section>
            <h3>Eras da Galáxia</h3>
            <p>Aqui, estão documentadas todas as chamadas "eras" da história galáctica.</p>
            <a href="historia/alvorecer.php">Alvorecer dos Jedi</a>
            <a href="historia/velha.php">A Velha República</a>
            <a href="historia/alta.php">A Alta República</a>
            <a href="historia/queda.php">A Queda dos Jedi</a>
            <a href="historia/imperio.php">Reinado do Império</a>
            <a href="historia/rebeliao.php">Era da Rebelião</a>
            <a href="historia/novarep.php">A Nova República</a>
            <a href="historia/ordem.php">Primeira Ordem</a>
            <a href="historia/novajed.php">Nova Ordem Jedi</a>
            <a href="historia/legado.php">Legado</a>
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