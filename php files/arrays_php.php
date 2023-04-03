<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<body>
    <?php 
    // Indexed Arrays
    echo "<b>Indexed Arrays Follows!</b><br><br>";
    $cars = array("Volvo", "BMW", "Audi", "Mercedes ");
    $carlength =count($cars);
    for($x = 0; $x < $carlength; $x++){
        echo $cars[$x];
        echo "<br>";
    }

    
    // Associative Arrays
    echo "<br>";
    echo "<b>Associative Arrays Follows!</b><br><br>";
    $age = array("Peter"=> "35", "Ben" => "40", "Joe" => "45", "Virat" => "34");
    foreach($age as $y => $y_value){
        echo "Keys = " .$y. ", Value = " .$y_value;
        echo "<br>" ;
    }
    
    //Multidimensional Arrays
    echo "<br>";
    echo "<b>Multidimensional Arrays Follows!</b><br><br>";
    $vehicle = array(array("Volvo", 22, 18), array("BMX", 15, 13), array("Saab", 5, 2));
    echo $vehicle[0][0]. " : In stock : " .$vehicle[0][1]. " Sold : " .$vehicle[0][2]. "<br>";
    echo $vehicle[1][0]. " : In stock : " .$vehicle[1][1]. " Sold : " .$vehicle[1][2]. "<br>";
    echo $vehicle[2][0]. " : In stock : " .$vehicle[2][1]. " Sold : " .$vehicle[2][2]. "<br>";
    ?>
</body>
</html>