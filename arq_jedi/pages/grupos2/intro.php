<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Grupo</title>
</head>
<body>
    <section>
        <?php
        include '../../headerfooter/header.php'
        ?>
    </section>

    <div>
        <section>
            <a href="../grupos.php">Voltar</a>
        </section>
    </div>

    <div>
        <section>
            <h2>Mandalorianos</h2>
            <img src="../../imagens/mando2.jpg" alt="Mandalorianos" width=450px>
            <br><a href="mando/mando.php">Os Mandalorianos</a>
        </section>
    </div>

    <div>
        <section>
            <h2>Ordem Sith</h2>
            <img src="../../imagens/sith.jpg" alt="Ordem Sith" width=450px>
            <br><a href="sith/sithread.php">Ir a lista de Siths - CRUD</a>
        </section>
    </div>

    <div>
        <section>
           <?php
           include '../../headerfooter/footer.php'
           ?>
        </section>
    </div>
</body>
</html>