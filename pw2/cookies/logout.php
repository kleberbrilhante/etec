<?php
// Expirando os cookies
setcookie("email_usuario", "", time() - 3600, "/");
setcookie("senha_usuario", "", time() - 3600, "/");

// Redireciona para a página de login
header("Location: login.html");
exit();
?>
