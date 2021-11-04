<?php
$str="I'm sorry Dave I'm afraid I can't do that";
for($i=0; isset($str[$i]) == TRUE ;$i++){
$voyelle = $str[$i];
if($voyelle=='a'  || $voyelle=='e'  || $voyelle=='i' || $voyelle=='o' || $voyelle=='u' || $voyelle=='y'){
echo $voyelle;
}
}