<?php
$tableau = array(
    array("type","nom","valeur"),
    array("Chaîne de caratéres","string","Romain"),
    array("Nombres entiers","int",3),
    array("Nombres décimaux","float",26.51),
    array("Booléens","bool","true"),
    array("Rien","NULL","")
);

echo "<table border=1>";
echo "<tr>";
echo "<th>",$tableau[0][0],"</th>";
echo "<th>",$tableau[0][1],"</th>";
echo "<th>",$tableau[0][2],"</th>";
echo "</tr>";
echo "<th>",$tableau[1][0],"</th>";
echo "<th>",$tableau[1][1],"</th>";
echo "<th>",$tableau[1][2],"</th>";
echo "</tr>";
echo "<th>",$tableau[2][0],"</th>";
echo "<th>",$tableau[2][1],"</th>";
echo "<th>",$tableau[2][2],"</th>";
echo "</tr>";
echo "<th>",$tableau[3][0],"</th>";
echo "<th>",$tableau[3][1],"</th>";
echo "<th>",$tableau[3][2],"</th>";
echo "</tr>";
echo "<th>",$tableau[4][0],"</th>";
echo "<th>",$tableau[4][1],"</th>";
echo "<th>",$tableau[4][2],"</th>";
echo "</tr>";
echo "<th>",$tableau[5][0],"</th>";
echo "<th>",$tableau[5][1],"</th>";
echo "<th>",$tableau[5][2],"</th>";