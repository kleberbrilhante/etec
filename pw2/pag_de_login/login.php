<?php
// obtem os valores digitados
$email = $_POST["email"];
$senha = $_POST["senha"];
include "conecta_mysqli.inc";

//escapa os caracteres especiais para evitar ataques de SQL Injection
$email = $conexao -> real_escape_string($email);
$senha = $conexao -> real_escape_string($senha);

// acesso ao bancos de dados
$resultado = $conexao -> query("SELECT * FROM usuarios where email='email'");
$linhas = $resultado -> num_rows;

if($linhas==0){
// teste se a consulta retornou algum registro
echo "<html><body>";
echo "<p align=\"center\">E-mail não encontrado!</p>";
echo "p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
echo "</body></html>";
} else{
$dados = $resultado->fetch_array();
$senha_banco = $dados["senha"];
if ($senha != $senha_banco){ // confere a senha
echo "<html><body>";
echo "<p align=\center\">A senha está incorreta!</p>";
echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";

echo "</body></html>";
}


else {
// usuario e senha corretos. vamos criar os cookies

setcookie("email_usuario", $email);
setcookie("senha_usuario", $senha);

// direciona para a pagina inicial dos usuarios cadastrados
header ("location: pagina_inicial.php");
}

}

$conexao->close();

?>