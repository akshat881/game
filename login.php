<?php
include("db.php");
$lo=$_POST['mail'];
$pa=$_POST['pass'];
if(isset($_POST['submit'])){
$ad="SELECT * FROM admin WHERE mail='$lo' && pass='$pa'";
$s="SELECT * FROM sign WHERE email='$lo'&& pswd='$pa'";
$n=mysqli_query($con,$s);
$r=mysqli_num_rows($n);
$am=mysqli_query($con,$ad);
$rn=mysqli_num_rows($am);
if($rn){
    header('Location: admin.php');
}
elseif($r){
    header('Location: Quiz Application with Timer/index.html');
}
else{
    echo"user dosent exist";
}
}
?>