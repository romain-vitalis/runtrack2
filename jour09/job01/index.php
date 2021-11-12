<?php
$bdd = mysqli_connect("localhost","root","","jour08");


$req= mysqli_query($bdd,"SELECT * FROM etudiants");

$res= mysqli_fetch_all($req);


var_dump($res);


?>


<table border=1>
    <thead>
        <tr>
            <th>Id</th>
            <th>Prenom</th>
            <th>NOM</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
        </tr>

    </thead>
    <tbody>
        <?php 
        foreach ($res as $key => $value) 
        {
            echo "<tr>";
            foreach($value as $key1 => $value1){
                echo '
            
                <td>'.$value1.'</td>
        
                ';   
            }
          echo "</tr>";
        }

        ?>

    </tbody>