<?php
/* exemple 1 */

$i = 0; 
while ($i <=100 ) {
    if ($i >= 0 && $i <=20) {
    echo"<i>",$i,"</i><br>";
    }
    elseif ($i >= 25 && $i <=50) {
        echo"<u>",$i,"</u><br>"; 
    }
    elseif ($i==42){
        echo"LaPlateforme_","<br>";
        
 }
    
else {echo $i,"<br>";}
 $i++;  
}
?>