<?php
$host = "localhost";
$user = "seu_usuario";
$pass = "sua_senha";
$db = "forum_site";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>