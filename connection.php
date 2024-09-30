<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "notas";

$conn = new mysqli($servername,$username,$password, $dbname)

if($conn->conect_error){
    die("Falha na conexão" . $conn -> conection_error)
}

?>