<?php
    include "connection.php";
    $response = $conn->query("SELECT * FROM notas");
    $aulas = array();

    while($row = $response->fetch_assoc()) {
        array_push($aulas, $row);
    }

    $conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    <?php foreach ($notas as $notas): ?>
    <div>
        <p>notas: <?= $aula["nota"]?> </p>
        <p>titulo: <?= $aula["titulo"]?> </p>
        <p>conteudo: <?= $aula["conteudo"]?> </p>
        <a href="update.php?id=<?= $aula["id"]?>">Alterar</a>
        <a href="delete.php?id=<?= $aula["id"]?>">Deletar</a>
    </div>
    <hr>
    <?php endforeach ?>
</body>
</html>