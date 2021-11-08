<?php
function  bonjour ($jour){
if($jour==true){
    echo "Bonjour<br>";
}
elseif($jour==false){
    echo"Bonsoir";  
   }
}
bonjour(true);
return bonjour(false)
?>