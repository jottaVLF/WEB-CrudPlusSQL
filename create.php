<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Criar Usuário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Criar Usuário</h1>
    <?php
    include 'dao.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if ($conn->query($sql) === TRUE) {
            echo "<p class='success-message'>Novo usuário criado com sucesso!</p>";
        } else {
            echo "<p class='error-message'>Erro: " . $sql . "<br>" . $conn->error . "</p>";
        }
    }
    ?>
    <form method="post" action="" class="create-form">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        <input type="submit" value="Criar Usuário">
    </form>
    <form action="index.php" method="get">
        <button type="submit">Voltar</button>
    </form>
</body>
</html>