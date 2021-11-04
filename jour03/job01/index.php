<?php
$tableau= array(98,171,173,200,204,404,459);
foreach($tableau as $nombre){
if ($nombre % 2 == 0){
echo $nombre ," est un nombre pair","<br>";
}
else {
    echo $nombre ," est un nombre impair","<br>";
    }

}
?>