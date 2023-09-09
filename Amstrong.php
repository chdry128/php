

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amstrong Or Not</title>
    <link rel="stylesheet" href="Amstrong.css">
</head>

<body>
    
<form  method="POST" action="">
    Enter the number you want to check:<input type ="number" name="number">
    <input type = "submit" value ="check">


</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){


$num=$_POST["number"];
$temp=$num;
$digit=0;
while($temp>0)
{
    $rem=$temp%10;
    $digit=$digit+($rem*$rem*$rem);
    $temp=$temp/10;
}
if($num==$digit)
{
    echo"Amstrong";

}
else{
    echo"Not Amstrong";

}
}
?>
    
</body>
</html>
