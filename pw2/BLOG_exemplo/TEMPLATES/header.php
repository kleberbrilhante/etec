<!-- helpers e Posts-->
<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog do Dekko</title>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <!-- CSS Aplicação -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>
<body>
    <header>
     <a href="<?= $BASE_URL ?>" id="logo">
       <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog do Dekko">
     </a>
     <nav>
        <ul id="navbar">
            <li><a href="index.php"class="nav-link">Home</a></li>
            <li><a href="#"class="nav-link">Categorias</a></li>
            <li><a href="#"class="nav-link">Sobre</a></li>
            <li><a href="contact.php"class="nav-link">Contato</a></li>
        </ul>
     </nav>
    </header>
    
