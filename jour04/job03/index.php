<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Formulaire html
</title>
</head>
<body>
<?php
if(isset($_POST['nom']) == TRUE){
   
    echo 'il y a 3 valeurs';
}
?>
<form action="#" method="POST">
Votre nom :<input type="text" name="nom">
Votre âge :<input type="text" name="age">
Date : <input type="date" name="date">
<p>
<input type=submit value="Envoyer">
</form>
</body>
</html>