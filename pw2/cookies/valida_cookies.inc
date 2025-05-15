<?php
$email_usuario = '';  // Inicializa as variáveis
$senha_usuario = '';  // Inicializa as variáveis

if (isset($_COOKIE["email_usuario"]) && isset($_COOKIE["senha_usuario"])) {
    $email_usuario = $_COOKIE["email_usuario"];
    $senha_usuario = $_COOKIE["senha_usuario"];

    include "conecta.inc";

    // Escapa os caracteres especiais para evitar ataques de SQL injection
    $email_usuario = $conexao->real_escape_string($email_usuario);
    $senha_usuario = $conexao->real_escape_string($senha_usuario);

    // Verifica se o login é válido
    $resultado = $conexao->query("SELECT * FROM usuarios WHERE email='$email_usuario' AND senha='$senha_usuario'");

    if ($resultado->num_rows == 0) {
        // Expirando os cookies
        setcookie("email_usuario", "", time() - 3600, "/");
        setcookie("senha_usuario", "", time() - 3600, "/");
        echo "Você não efetuou o login!<br> Clique <a href='login.html'>aqui</a> para efetuar o login";
        exit();
    }
} else {
    echo "Você não efetuou o <a href='login.html'>login</a><br>";
    exit();
}

$conexao->close();
?>
