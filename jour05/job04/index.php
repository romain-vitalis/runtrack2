
<?php
function calcule($a,$operation,$b)
{
    if($operation=="-")
   return $a-$b;

elseif ($operation=="*"){
return$a*$b;
}
elseif ($operation=="+"){
 return$a+$b;
    }
elseif ($operation=="%"){
  return$a%$b;
    }
    elseif ($operation=="/"){
       return $a/$b;
        }
    }
echo calcule(4,"+",2);
echo "<br>" ,calcule(26,"-",10);
echo "<br>" ,calcule(26,"*",3);
echo "<br>" ,calcule(26,"%",2);
echo "<br>" ,calcule(26,"/",4);