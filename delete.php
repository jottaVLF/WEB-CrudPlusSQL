<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Excluir Usuário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Excluir Usuário</h1>
    <?php
        include 'dao.php';
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];
            $sql = "DELETE FROM usuarios WHERE id=$id";
            if ($conn->query($sql) === TRUE) {
                echo "<center><p class='success-message'>Usuário apagado com sucesso.</p>";
            } else {
                echo "<p class='error-message'>Erro: " . $conn->error . "</p>";
            }
        }
    ?>
    <form action="index.php" method="get">
        <button type="submit" class="delete-button">Voltar</button>
    </form>
</body>
</html>