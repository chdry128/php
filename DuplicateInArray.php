<?php
$array=array(1,2,2,3,4,6,7,8,5,7,4,6,3);
$n=count($array);
echo"The Duplicate Number Are: <br>";
for($i=0;$i<$n;$i++){
    for($j=$i+1;$j<$n;$j++){
        if($array[$i]==$array[$j]){
            echo "\n";
            echo "$array[$i]";
            echo"<br>";

        }
    }
}
?>