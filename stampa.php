<?php 
$nome = $_GET["nome"];
$stringLen = strlen($nome);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>

        Il paragrafo inviato è lungo
        <?php
        echo $stringLen;
        ?> 
        caratteri;
    </h1>
</body>
</html>