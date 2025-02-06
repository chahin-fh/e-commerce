<?php
include("../cnx.php");
extract($_POST);
$res = mysqli_query($cnx,"INSERT into client(username,password,adresse,email) values('$username','$password','$adresse','$email')");
mysqli_close($cnx);
?>