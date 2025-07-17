<?php
include 'db.php';

$sql = "SELECT * FROM posts ORDER BY criado_em DESC";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<div class='post'>";
    if (!empty($row['imagem'])) {
        echo "<img src='" . htmlspecialchars($row['imagem']) . "' alt='Imagem do post' />";
    }
    echo "<p>" . nl2br(htmlspecialchars($row['texto'])) . "</p>";
    echo "<small>Postado em: " . $row['criado_em'] . "</small>";
    echo "</div>";
}
?>