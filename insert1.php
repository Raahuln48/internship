<?php

include "conn.php";


$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$branch=$_POST['branch'];

// $password=password_hash($password,PASSWORD_BCRYPT);//encryption type

$query="INSERT INTO `student` (`student_name`,`student_email`,`student_address`,`student_branch`) VALUES('$name','$email','$address','$branch')";
$result=mysqli_query($con,$query);

if($result){
	echo "successfully inserted";
}
else{
	echo "failed to insert";
}
?>