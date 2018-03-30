<?php

//$reeks1 = [6,2,10,4,3,6,9,5,13,7,4,2,5];
if(!isset($pos)){
    $pos = count($reeks1);
}
$reeks1 = [6,11,10,4,3,6,9,5,13,7,4,2,1];
$reeks2 = [];
$wisseling = false;



if($reeks1 != $reeks2){
    

for ($i = 0; $i == $pos; $i++){
    
        $a = 0;
        
        while($a != $pos){

                if ($reeks1[0] > $reeks1[$a]){

                        $reeks2[] = $reeks1[$a];       //stop(kopieer) cijfer van array 1 positie a in array 2

                        $reeks1[$a] = $reeks1[0];               //vervang van array 1 positie a door het vergelijk cijfer van array 1 positie 0 (positie 0 is nu gekopieert naar positie a)

                        $bin = array_shift($reeks1);          //shift array 1 nu zodat positie 0 wegvalt. deze is immers op positie a gezet in array 1. array 1 is nu 1 ingekort en array 2 is verlengt

                        break;
                }elseif($reeks1[0] == $reeks1[$a]){
                    array_push($reeks2, $reeks1[$a], $reeks1[0]);   //stop(kopieer) cijfers van array 1 positie a in array 2
                    
                        break;
                }else{
                    $a++;

                }
        }
}
}
print_r($reeks1);
echo "<br>";
    print_r($reeks2);
    echo "<br>";
    echo $a;



//$nieuwereeks []
//
//n=13
//
//while ($wisseling = true && nog niet aan eind van $reeks){
//	
//		voer je de wisseling uit naar $nieuwereeks
//		$wisseling = true;
//	}elseif{ (reeks[0] = $reeks[1]}
//		plaats beide in $nieuwereeks
//}
//
