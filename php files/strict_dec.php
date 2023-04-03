<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strict Declaration Functions</title>
</head>
<body>
    <?php
    function addNum(int $a, int $b){
        return $a + $b;
    }
    echo addNum(5, 5)
    ?>
</body>
</html>