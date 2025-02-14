<?php
include("../cnx.php");
extract($_POST);
$res1 = mysqli_query($cnx, "SELECT * FROM client WHERE username='$username' and passwords='$password' and email='$email'");
$nb=mysqli_num_rows($res1);
if ($nb>0) {
    echo "<script>alert('username est deja existe !!');</script>";
    header('lcoation : index.html');
}else{
    $res = mysqli_query($cnx,"INSERT into client(username,passwords,adresse,email) values('$username','$password','$adresse','$email')");
}
mysqli_close($cnx);
?>