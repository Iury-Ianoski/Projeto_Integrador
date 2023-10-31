<?php 
    require_once('../includes/conexao-db.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Document</title>
</head>
<body>
    <header class="cabecalho">
        <img class="cabecalho__logo" src="../assets/images/Logo.svg" alt="">
    </header>
    <main class="conteudo">
        <section class="container">
            <div>
                <form class="container__searchbox" action="browse.php" method="get">
                    <input class="container__searchbox__input" type="text" placeholder="Busque sobre cordas, modelos e composições do corpo do seu instrumento" name="busca">
                    <input type="submit" value="" class="container__searchbox__icone"  alt="">
                </form>
            </div>
        </section>
    </main>
    <footer class="rodape">
        <p class="rodape__texto">Desenvolvido por Iury Ianoski.</p>
        <a  class="rodape__link" href="https://github.com/Iury-Ianoski/">
            <img  class="rodape__link__icone" src="../assets/images/github-mark.svg" alt="icone git">
        </a>
    </footer>
</body>
</html>