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
?>