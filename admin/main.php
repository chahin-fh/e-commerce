<?php
include('../cnx.php');
extract($_POST);
$res0=mysqli_query($cnx,"SELECT * from admin where name='$username'");
$nb=mysqli_num_rows($res0);
if ($nb>0){
    echo '<script>alert("ce admin est deja exeiste!!");</script>';
    header("refresh:0;url=index.html"); 
}else{
    $res=mysqli_query($cnx,"INSERT INTO  admin (name,mail,pass) VALUES ('$username','$email','$password')");
}
?>