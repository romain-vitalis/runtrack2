
<?php
$bdd = mysqli_connect("localhost","root","","jour08");


$req= mysqli_query($bdd,"SELECT * FROM salles ORDER BY capacite ASC");

$res= mysqli_fetch_all($req);





?>


<table border=1>
    <thead>
        <tr>
            <th>ID</th>
            <th>nom</th>
            <th>id_etage</th>
            <th>capacité</th>
            
            
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