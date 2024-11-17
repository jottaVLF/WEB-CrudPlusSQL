<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Atualizar Usuário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Atualizar Usuário</h1>
<?php
    include 'dao.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>Usuário atualizado com sucesso.</p>";
        } else {
            echo "<p style='color: red;'>Erro: " . $conn->error . "</p>";
        }
    } else {
        $id = $_GET['id'];
        $sql = "SELECT * from usuarios WHERE id=$id";
        $result = $conn->query($sql);
        $usuario = $result->fetch_assoc();
    }
?>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
    Nome: <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required><br>
    Email: <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required><br>
    <input type="submit" value="Atualizar Usuário">
</form>
<form action="index.php" method="get">
    <button type="submit">Voltar</button>
</form>
</body>
</html>