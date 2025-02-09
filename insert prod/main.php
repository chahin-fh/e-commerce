<?php
include('../cnx.php');
extract($_POST);
$cat='';
if(isset($_POST['cat']) && !empty($_POST['cat'])){
    $cat=$_POST['cat'];
}elseif(isset($_POST['cat2']) && !empty($_POST['cat2'])){
    $cat=$_POST['cat2'];
}
$res=mysqli_query($cnx, "INSERT INTO prod (image,titel,price,cat,dis) VALUES('$file','$titel','$cat','$dis')");

?>