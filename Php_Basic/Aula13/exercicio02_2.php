<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $n = isset($_GET["num"]) ? ($_GET["num"]) :  1;
            for ($i=1; $i <=10 ; $i++) { 
                $r = $n * $i;
                echo " $n x $i = $r <br/>";
            }
        ?>
        <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>