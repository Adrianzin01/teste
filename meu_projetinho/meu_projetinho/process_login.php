<?php
// Credenciais de login (você pode usar um banco de dados no futuro)
$valid_username = "admin";
$valid_password = "1234";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se as credenciais estão corretas
    if ($username === $valid_username && $password === $valid_password) {
        // Login bem-sucedido - Redireciona para a página principal
        header("Location: main_page.php");
        exit;
    } else {
        // Login falhou - Redireciona para a tela de login com erro
        header("Location: login.php?error=1");
        exit;
    }
}
?>
