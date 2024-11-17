<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
    include 'dao.php';
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);
?>
    <h2>Lista de Usuários</h2>
	<div class="no-print">
        <button onclick="window.print()">Imprimir Relatório</button>
    </div>
    <p style="text-align: center;"><a href="create.php">Criar novo usuário</a></p>

<?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td><a href='update.php?id=" . $row["id"] . "'>Editar</a>";
            echo "<a href='delete.php?id=" . $row["id"] . "'>Excluir</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<p style='text-align: center;'>Nenhum usuário encontrado</p>";
    }
    $conn->close();
?>
</body>
</html>