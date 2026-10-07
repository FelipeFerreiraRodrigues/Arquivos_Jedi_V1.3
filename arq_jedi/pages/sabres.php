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
            <p>Os Sabres de Luz são a arma utilizada pelos Jedi, cujo emite uma <br> lâmina de plasma puro e sem peso. Sua energia e lâmina se dão por <br> conta do lendário Cristal Kyber, um pequeno cristal responsável <br> por parte do funcionamento de um sabre de luz. Estes cristais são <br> raramente encontrados na natureza e são incolores de forma natural.</p>
            <img src="../imagens/cores.png" alt="Cores de Sabre de luz" width="300px">
            <p>Após um Jedi se conectar com o cristal Kyber de <br> seu sabre, a cor do cristal muda. Cada cor possui <br> seu significado diante a personalidade e mentalidade de seu usuário: <br><hr> Azul -> Bravura e Justiça <br> Verde -> Sabedoria e Harmonia <br> Roxo -> Auto-Controle e Equilíbrio entre Lado Luminoso e Sombrio <br> Amarelo -> Vigilância e Proteção <br> Vermelho -> Cor não natural, obtível por um ritual do Lado Sombrio <br> chamado "Sangramento" <br> Branco -> Não natural como o vermelho, mas exige o processo <br> contrário, no ritual "Purificação" do lado luminoso. <br><hr> Algumas outras cores existem, porém não possuem um estudo <br> ou analíse profundo sobre, ou então são extremamente raras: <a href="grupos2/mando/mando.php#tarre">Sabre Negro</a> </p>
            
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