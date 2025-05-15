<?php

$email_usuario = '';  // Inicialize as variáveis
$senha_usuario = '';  // Inicialize as variáveis

if (IsSet($_COOKIE["email_usuario"])) {
    $email_usuario = $_COOKIE["email_usuario"];
}
if (IsSet($_COOKIE["senha_usuario"])) {
    $senha_usuario = $_COOKIE["senha_usuario"];
}

if (empty($email_usuario) OR empty($senha_usuario)) {
    include "conecta_mysql.inc";

    // Escapa os caracteres especiais para evitar ataques de SQL injection
    $email_usuario = $conexao->real_escape_string($email_usuario);
    $senha_usuario = $conexao->real_escape_string($senha_usuario);

    // Corrigido: concatenando as variáveis corretamente na consulta SQL
    $resultado = $conexao->query("SELECT * FROM usuarios WHERE email='" . $email_usuario . "' AND senha='" . $senha_usuario . "'");

    if ($resultado->num_rows == 0) {
        // Expirando os cookies
        setcookie("email_usuario", "", time() - 3600);
        setcookie("senha_usuario", "", time() - 3600);
        echo "Você não efetuou o login!<br> Clique <a href='login.html'>aqui</a> para efeturar o login";
        exit();
    }
} else {
    echo "Você não efetuou o <a href='login.html'>login<br></a>";
    exit();
}

$conexao->close();
?>
