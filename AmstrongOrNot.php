<?php
$num=153;
$digit=0;
$temp=$num;
while($temp>0)
{
    $rem=$temp/10;
    $digit=$digit+($temp*$temp*$temp);
    $num = $temp/10;
}
if($temp==$digit)
{
    echo"amstrong";

}
else{
    echo"<br> not amstrong";

}
?>