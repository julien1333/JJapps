<?php

$username =$POST['username'];
$password =$POST['password'];
$username =stripcslashes($username);
$password=stripcslashes($password);
$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);
mysqli_connect($mysql_username , $mysql_password);
mysqli_select_db("login");

$result= mysql_query("select * from users where username = '$username' and password ='$password'") 
or die("Failed to query database".mysql_error());
$row=mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
	echo "Login success!!! WELCOME".$row['username'];
}
else{
	echo "Failed to login!!!";
}

?>
