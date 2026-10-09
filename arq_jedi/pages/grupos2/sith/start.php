<?php include '../../../login/vefadm.php';
include '../../../login/confidencial.php';
include '../../../database/function.php'?>
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
        include '../../../headerfooter/header.php';
        ?>
    </section>

    <div>
        <section>
            <?php
            //Aqui ficará a barra de navegação lateral
            include 'asidesith.php'
            ?>
        </section>
    </div>

    <div>
        <section>
            <!--Aqui será uma espécie de "Sobre nós"-->
            <h2>AVISO - ALTO RISCO</h2>
            <img src="imagens/altarepub.jpeg" alt="Jedis Alta República" width="500px">
            <p>Os Arquivos aqui presentes se tratam de membros da perigosa e corrupta Ordem Sith, estudar sobre quaisquer técnicas utilizadas pelos mesmos pode ser extremamente perigoso, siga por sua conta e risco
            </p>
        </section>
    </div>

    <a href="?off_conf=1">Sair do Modo Confidencial</a>

    <div>
        <section>
            <?php
            //Aqui ficará o footer da pagina
            include '../../../headerfooter/footer.php';
            ?>
        </section>
    </div>

</body>
</html>