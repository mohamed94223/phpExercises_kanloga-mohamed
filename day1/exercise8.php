<?php
$color=array("bleu", "rouge", "jaune")

foreach($color as $value){
    if($value == "bleu"){
        echo "La couleur préférée de Louis est le".$value.<br/>;
    }
    else if($value == "rouge"){
        echo "Pour sa peinture, Andrée a utilisé du".$value.<br/>;
    }
    else{
        echo "Ainsi n'a pas de chemise".$value.<br/>;
    }
}
?>