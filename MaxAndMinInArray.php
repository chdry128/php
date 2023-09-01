<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program To Find The Min,Max and Average</title>
</head>
<body>

    <?php
    $temp = array(62,35,34,45,65,34,54,67,76,54,33,45,65,65,45,34,78,56,87);
    
    $n=count($temp);
    $sum=array_sum($temp);
    $average=$sum/$n;
    $max=max($temp);
    $min=min($temp);
    echo "the average temperature is $average" ;
    echo "<br>";
    echo "the maximum temperture is  $max ";
    echo "<br>";
    echo"the minimum temperature is  $min";
    ?>

    
</body>
</html>