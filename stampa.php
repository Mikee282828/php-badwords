<?php 
$stringa = $_GET["stringa"];
$messaggio = "Il paragrafo inviato è lungo  " . strlen($stringa) . " caratteri";
$censura = $_GET["censura"];

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

        

        <?php
            echo $messaggio;
        ?>
        <br>
        
        <?php
            echo str_replace($censura,"***",$messaggio);
        ?>
    </h1>
</body>
</html>