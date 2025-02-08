<?php
include('../conx.php');
extract($_POST);

$res=mysqli_query($cnx, "INSERT INTO prod (image,titel,price,cat,dis) VALUES('$file','$titel','$cat','$)");
?>