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
        <pre>
        <?php
        $v = array( 3 => 5,
                    1 => 9,
                    0 => 8,
                    7 => 7);
        unset($v[0]); //desalocando o indice 0
        print_r($v);
        ?>
        </pre>
    </div>
</body>
</html>
