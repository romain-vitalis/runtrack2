
<?php
$bdd = mysqli_connect("localhost","root","","jour08");


$req= mysqli_query($bdd,"SELECT COUNT(*) FROM etudiants");

$res= mysqli_fetch_all($req);





?>


<table border=1>
    <thead>
        <tr>
            <th>Nombre</th>
            
            
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