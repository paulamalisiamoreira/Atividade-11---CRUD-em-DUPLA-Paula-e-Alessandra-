<?php
include "./connection.php";
if (isset($_POST['create'])) {
    $titulo= $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    

    $sql = "INSERT INTO aulas(titulo, conteudo) VALUES ('$titulo', '$conteudo')";

    if ($conn->query($sql) === TRUE) {
        echo "Adicionado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>

  <input type="submit" name="create" value="adicionar nota">
   
    



    
</body>
</html>
<?php $conn->close() ?>