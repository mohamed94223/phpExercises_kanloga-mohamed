<?php
$tab=array("kiwi","pomme","poire","litchi","rhubarbe");
$choice="poire";
function searchingruits($tab,$choice){
    foreach($tab as $choice){
        if($tab==$choice){
            echo "Le fruit a été trouvé:".$choice
        }
        else {
            echo "Recherche infructueuse."
        }
    }
}
?>