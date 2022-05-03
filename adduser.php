<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>insertArtist</title>

</head>
<body>

<?php
$host = "localhost";
$user = "jdongieux1";
$pass = "jdongieux1";
$dbname="jdongieux1";

//Create connection
$conn = new mysqli($host, $user, $pass,$dbname);
//Check connection
if($conn->connect_error){
	echo "Could not connect to server\n";
	die("Connection failed: ".$conn->connect_error);
}
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$email=$_REQUEST['email'];
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$prefdash='seller';
$isadmin=false;

#We could scan thru all of the usernames and emails before executing the code below


$sql="INSERT INTO WILLOWUSERS (email,user, pass,firstname,lastname,isadmin,prefdash) 
VALUES ('$email','$user','$pass','$firstname','$lastname','$isadmin','$prefdash')";
if($conn->query($sql) ===true){
	echo "<a href=''>Welcome user!</a>";
	header('Location:loginform.php');
} else {
	echo "Error with insertion: ".$conn->error;
	echo "<a href='loginform.php'>Try Again</a>";
}

?>
</body>



</html>