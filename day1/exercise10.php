<?php
$packages=array(["Amazone",20,45000],["Cdiscount",8,192000],["Etsy",4,68000]);
foreach($packages as $packages){
        if($packages[1]>=10 || $packages[2]>68000){
            echo "SPECIAL:",$packages[0]."<br/>";
        }
        else {
            echo "STANDARD:",$packages[0],"<br/>";
        }
    }
}
?>