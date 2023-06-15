<?php
$tab=array("kiwi","pomme","poire","litchi","rhubarbe");
$choice="poire";
function searchingFruits($tab,$choice){
    foreach($tab as $value){
        if($value == $choice){
            return "Le fruit a été trouvé:".$choice;
        }
        
    }
    
    return "Recherche infructueuse.";
    
}
echo searchingFruits($tab,$choice);
?>