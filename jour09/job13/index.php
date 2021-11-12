<?php
$bdd = mysqli_connect("localhost","root","","jour08");


$req= mysqli_query($bdd,"SELECT salles.nom,etage.nom FROM salles INNER JOIN etage WHERE etage.id = salles.id_etage ");

$res= mysqli_fetch_all($req);





?>


<table border=1>
    <thead>
        <tr>
            <th>Nom</th>
            <th>etage </th>
           
            
        </tr>

    </thead>
    <tbody>
        <?php 
        foreach ($res as $key => $value) 
        {
            echo "<tr>";
            foreach($value as $key1 => $value1){
                echo '<td>'.$value1.'</td>'; 
            
                  
        
                
            }
          echo "</tr>";
        }

        ?>

    </tbody> 