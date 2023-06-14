<?php
$str="abcdefghijklmnopqrstuvwxyz";
$i=0;

while($i<strlen($str)){
    if ($i % 2){
        echo $str[$i];
    } 
    $i=$i+1   
}
?>

0 % 2 = 0
1 % 2 = 1
2 % 2 = 0
3 % 2 = 1