<html>
<head>
<title>kito</title>
 <link rel="stylesheet" href="style.css">
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php

include("db.php");

$tx=$_POST['txt'];
$na=$_POST['email'];
$ni=$_POST['pswd'];


if(isset($_POST['submit'])){
    $s="SELECT * FROM sign WHERE email='$na'";
  
    $n=mysqli_query($con,$s);
    $r=mysqli_num_rows($n);
    if($r){
        echo "<script> 
        lSwal.fire(
            'Your account is created ',
            'Please Check Your Mail','error'  
        );
        document.location='index.php';
        </script>";
    
      
    }
    else{
$op="INSERT INTO `sign` (`txt`,`email`, `pswd`) VALUES ('$tx' ,'$na', '$ni')";
$t=mysqli_query($con,$op);

       $name = $_POST['txt'];
      
       $Subject =  "account conformation";
       $Msg = "your account Has Been Succesfully Created";
       $headers =  'MIME-Version: 1.0' . "\r\n"; 
       $headers .= 'From: Your name <infocbs869@gmail.com>' . "\r\n";
       $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
       $to = $na;
       
       $txt = "Dear ".$name."\n\n".$Msg;
 
       
       mail($to,$Subject,$txt,$headers);
  
echo "<script> 
Swal.fire(
    'Your account is created ',
    'Please Check Your Mail','error'  
);
document.location='index.php';
</script>";

}
}
exit;
?>
</body>
</html>