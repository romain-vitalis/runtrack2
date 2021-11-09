
<?php
session_start();
if (!isset($_SESSION['nbvisites'])) {
  $_SESSION['nbvisites'] = 0;
} else {
  $_SESSION['nbvisites']++;
}
echo $_SESSION['nbvisites'];
echo '<form action="index3.php">';
echo '<input type="submit" value="reset">';
echo '</form>';
?>