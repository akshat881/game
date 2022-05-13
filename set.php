<?php
   session_start();
    include("db.php");
    $pass=$_POST['pass'];
    $otp=$_POST['otp'];
    $repass=$_POST['repass'];
    $ni=$_SESSION['mail'];
    if(isset($_POST['submit'])){
      $s="SELECT * FROM sign WHERE email='$ni'";
      $n=mysqli_query($con,$s);
          while($row = mysqli_fetch_array($n)){ 
              
              $o=$row['otp'];
            }
          
      if($pass==$repass&&$o==$otp){
  
        $up="UPDATE `sign` SET `pswd`='$pass'WHERE email='$ni'";
        $n=mysqli_query($con,$up);
        $p="UPDATE `sign` SET `tokken`=NULL,`expire`=NULL,`otp`=NULL WHERE email='$ni'";
        $s=mysqli_query($con,$p);
        echo "<script>alert('PASS UPDTED');
        document.location='index.php';
       
        </script>";
      }
      else{
        echo "<script>alert('WRONG CREDINTIAL');
        document.location='index.php';
       
        </script>";
      }
  
    
  }
 
  ?>