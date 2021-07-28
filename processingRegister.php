<?php
require_once('connection.php');

if(isset($_POST['register']))
{
 $email=$_POST['email'];
 $psw=$_POST['psw'];
 $psw_repeat=$_POST['psw_repeat'];
 $passHash=md5($psw);

 $sqlEmail= mysqli_query($conn,"SELECT * FROM account WHERE email='$email'");
 $checkEmail=mysqli_num_rows($sqlEmail);

 
 if ($checkEmail !=0){
     $msg="Email already in use. please try a different email address";
 }
 else{

    $sql=mysqli_query($conn, "INSERT INTO account(email,psw)VALUES('$email','$passHash')");

    if($sql)
    {
        $msg="Data submitted succefully";
    }
    else{
        $msg='Error'.mysqli_error($conn);
    }

 }
 

    
}

?>