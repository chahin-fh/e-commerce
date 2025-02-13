<?php
session_start();
include("../cnx.php");
extract($_POST);
$res = mysqli_query($cnx , "SELECT * from client where email = '$email' and pass = '$pass'");
$nb = mysqli_num_rows($res);
if($nb == 1){
    $t = mysqli_fetch_array($res);
    $_SESSION= $t[0];
    //header("location : ../menu/menu.html");
    echo"jwk behi ";
}
?>