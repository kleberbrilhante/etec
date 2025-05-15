<html>
    <head>
        <title> form teste </title>
</head>
<body>
    <form action="form.php" method="get">
        Digite algo:<input type="text" name="formulário"><br>
        <input type="submit">
</form>
    <?php
echo "Você digitou: ", $_GET["formulário"], "<br>";
    ?>
    </body>
    </html>