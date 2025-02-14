<?php
include("../cnx.php");
session_start();
  extract($_POST);
  $res = mysqli_query($cnx,"SELECT * from client where (username = '$username' and passwords = '$pass')");
  $nb = mysqli_num_rows($res);
  if($nb > 0){
    $t = mysqli_fetch_array($res);
    $_SESSION = $t[0];
    header("location : ../menu/menu.html");
  }else{
    header("refresh:0;url=index.html"); 
    echo '<script>alert("makich m3ana a 5ouya !");</script>';
  }
mysqli_close($cnx);
?>