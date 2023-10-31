<?php 

require('../includes/conexao-db.php');

function buscar(PDO $pdo, string $getBusca): array {
    $busca = "select * from artigos where titulo like '%" . $getBusca . "%'or subtitulo like '%" . $getBusca . "%' or texto like '%" . $getBusca . "%';";
    $statement = $pdo->query($busca);
    $resultados = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $resultados;
}
