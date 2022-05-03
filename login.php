<?PHP
session_start();

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

$inputpass=$_REQUEST['pass'];
$inputuser=$_REQUEST['user'];
$sql="SELECT id,user,pass,isadmin FROM WILLOWUSERS";
$result=$conn->query($sql);
$validlogin=false;
$isadmin=false;
if($result->num_rows >0){
	while($row= $result->fetch_assoc()){
		if($inputuser == $row['user'] && $inputpass == $row['pass']){
			$validlogin=true;
		//We should check if they're an admin or not
		}
	}
}else {
	echo "No user/passes found";
}
if($validlogin){
	echo "<a href='dashboard.php'>Welcome user!</a>";
	//header to the 
	$_SESSION['username']=$inputuser;
	header('Location:dashboard.php');
}else {
	echo "invalid user/pass combo <BR>";
	echo "<a href='loginform.php'>Try Again</a>";
}
$conn->close();
?>