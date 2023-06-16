<?php
function averageCalc($numbers){
    $sum=0;
    $nbElements=count($numbers);

    foreach($numbers as $value){
        $sum += $value;
    }

    $avg= $sum / $nbElements;
    return $avg;
}
$nbArray=array(75,80,90,95,85);
$averageArray= averageCalc($nbArray);
echo "la moyenne du tableau est : ", $averageArray,".";
?>