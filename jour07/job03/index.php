<?php
session_start();
if (isset($_POST["reset"])){
    session_destroy();
    
}
elseif(isset($_POST["prenom"])){
    $_SESSION["prenoms"][]=$_POST["prenom"];
    foreach ($_SESSION["prenoms"] as $_SESSION["prenom"]){
        if(isset($_POST["prenom"])){
            echo "$_SESSION[prenom]<br>";
        }
    }

}
?>
<form action="" method="POST">
<br><br>
<label for="prenom">Votre prénom:</label><br>
<input type ="text" name="prenom" id="prenom">
<button name="submit">Valider</button>
<br> <br>
<button name="reset">reset</button>
</form>