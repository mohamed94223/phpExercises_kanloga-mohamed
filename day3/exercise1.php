<?php
$i=1;

for($i=1;$i<100;$i++){
    if($i % 3 !=0) {
        echo "Fizz"."<br/>";        
    }
    else if($i % 5 !=0){
        echo "Buzz"."<br/>";
    }
    else if($i % 3 && 5 !=0){
        echo "FizzBuzz"."<br/>";
    }
    else {
        echo $i;
    }
}
?>
