<?php
// configuração do banco de dados

$servidor = "localhost:3306";
$usuario_bd = "root";
$senha_bd = "";
$banco = "usuarios";

// Criando conexão com o banco
$conexao = new mysqli($servidor, $usuario_bd, $senha_bd, $banco);

// Todas essas credenciais acima vão depender de qual programa você usa para acessar o banco de dados
// Altere conforme o seu contexto
?>