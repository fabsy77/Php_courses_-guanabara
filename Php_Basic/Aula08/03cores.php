<!DOCTYPE html>
<html lang="en">
<head>
<?php
    #variaveis que vao receber informacoes do formulario (olha o Name)
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto generico";
        $tam =  isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor =  isset($_GET["cor"]) ? $_GET["cor"] : "#000000";#cor preta
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>

<body>
<div>
    <?php
        echo "<span class='texto'> $txt </span>";
    ?>
</div>
        
</body>
</html>