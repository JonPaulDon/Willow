<?PHP
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


/*
$sql= "CREATE TABLE WILLOWUSERS (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(30) NOT NULL,
	user VARCHAR(30) NOT NULL,
	pass VARCHAR(30) NOT NULL,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	isadmin BOOLEAN,
	prefdash VARCHAR(30) NOT NULL)
	";
if($conn->query($sql) ===true){
	echo "Table WILLOWUSERS created successfully";
} else {
	echo "Error creating table: ".$conn->error;
}
*/
$sql= "CREATE TABLE WILLOWPROPERTIES (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	seller VARCHAR(30) NOT NULL,
	city VARCHAR(30) NOT NULL,
	propstate VARCHAR(30) NOT NULL,
	propvalue VARCHAR(30) NOT NULL,
	numbedrooms VARCHAR(30) NOT NULL,
	propdesc VARCHAR(300) NOT NULL,
	picture VARCHAR(300) NOT NULL)
	";
if($conn->query($sql) ===true){
	echo "Table WILLOWPROPERTIES created successfully";
} else {
	echo "Error creating table: ".$conn->error;
}


$conn->close();
?>