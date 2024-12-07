<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="process_login.php" method="POST">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <?php
        // Exibe mensagem de erro, se houver
        if (isset($_GET['error'])) {
            echo "<p class='error'>Usuário ou senha inválidos!</p>";
        }
        ?>
    </div>
</body>
</html>
