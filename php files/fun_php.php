<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>
<body>
    <?php 
    function familyName($fname){
        echo "$fname Refsnes. <br>";   
    }
    familyName("Jani");
    familyName("Willianmson");
    familyName("Jordon");
    familyName("Bill");

    echo "<br>";

    function familyYear($fname, $year){
        echo "$fname Refsnes. Born in $year <br>";   
    }
    familyYear("Sachin", "1970");
    familyYear("Virat", "1985");
    familyYear("Gill", "1995");
    familyYear("Rishab", "1990");
    ?>
</body>
</html>