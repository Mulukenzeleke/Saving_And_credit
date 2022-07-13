<?php 
session_start();
include("connection.php");
if(isset($_POST['sub'])){
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$gender=$_POST['gender'];
$proffession=$_POST['option'];
$username=$_POST['username'];
$age=$_POST['age'];
//insert into ...

    $n=7;$p=8;
    function randomNumber($n) {
     $characters = '0123456789';
     $randomString = '';
     for ($i = 0; $i < $n; $i++) {
      $index = rand(0, strlen($characters) - 1);
      $randomString .= $characters[$index];
     }
     return $randomString;
     $passchar = '[0-9A-Za-z]';
       $randomString = '';
       for ($i = 0; $i < $p; $i++) {
        $index = rand(0, strlen( $passchar) - 1);
        $randomStringpass .=  $passchar[$index];
       }
       return $randomStringpass;
       
    } 
    $num=randomNumber($n);
    $pass=randomNumber($p);
      
      
        

$insert="insert into registration(firstname,lastname,gender,proffession,accountNo,username,password,age) values('$firstname','$lastname','$gender','$proffession','$num','$username','$pass','$age')";
$inserted=mysqli_query($conn,$insert);
if(!$inserted)
	echo "failld isnserted";
else
echo "inserted succesfully";
}
?>