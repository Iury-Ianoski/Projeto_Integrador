<?php 

    require_once('../includes/conexao-db.php');
    require_once('../config/search.php');

    $resultados = buscar($pdo, $_GET['busca']);
    $current_url = $_SERVER['REQUEST_URI'];
    var_dump($current_url);

    //var_dump(buscar($pdo, $getBusca));
    var_dump($resultados);

    var_dump($_GET['busca'])


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><p><?var_dump($current_url); ?></p></div>
    <div>
        <?php foreach($resultados as $resultado): ?>
            <div class="">
                <div><?= $resultado['titulo'] ?></div>
                <div><?= $resultado['subtitulo'] ?></div>
                <div><?= $resultado['texto'] ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>