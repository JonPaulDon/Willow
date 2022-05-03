<?php
session_start();
include('generateHTML.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Website</title>

    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
  </head>
  <body>
    <header>
    <img class="logo" height="50" width="auto" src="doglogo.png" alt="logo">
      <nav>
      <ul class="navlinks">
        <li> <a href="#">Services</a> </li>
        <li> <a href="#">Projects</a> </li>
        <li> <a href="#">About</a> </li>
        </ul>
      </nav>
      <a class="cta" href="#" onclick="displayPhone()"><button>
        Contact
      </button>
      </a>
    

                                  
    </header>
    
    <h1>Add a property!</h1>
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

$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$value=$_REQUEST['value'];
$bedrooms=$_REQUEST['bedrooms'];
$desc=$_REQUEST['desc'];
$seller=$_SESSION['username'];
$size=$_REQUEST['sqft'];

echo "Seller:".$_SESSION['username']."<BR>";
echo "city:".$city."<BR>";
echo "state:".$state."<BR>";
echo "value:".$value."<BR>";
echo "numbedrooms:".$bedrooms."<BR>";
echo "description:".$desc."<BR>";



$imagearray=$_FILES['fileToUpload'];
$imagefiletemp=$imagearray['tmp_name'];
echo "Image array: ";
print_r($imagearray);
echo "<BR>";
$imgname=$imagearray['name'];
$imagefileerror=$imagearray['error'];

echo "Image name:";
print_r($imgname);
echo "<BR>";
//Error code 0 means your image uploaded with no errors
echo "Image error code";
print_r($imagefileerror);
echo "<BR>";
echo "Temp img name: ";
print_r($imagefiletemp);
echo "<BR>";


if(file_exists($imagefiletemp)){
  echo "File Exists <BR>";
}else echo "File does not exist";

$uploadimagedest='images/'.$imgname;
if(move_uploaded_file($imagefiletemp,$uploadimagedest)){
  echo "uploaded!";
}else {
  echo "upload failed";
}

if(file_exists($uploadimagedest)){
  echo "Uploaded File Exists <BR>";
}else echo "Uploaded File does not exist";


//move_uploaded_file($imagefiletemp,$upload_image_dest);
/*
if(copy('doglogo.png','doglogocopy.png')){
  echo "uploaded!";
}else {
  echo "upload failed";
}
*/




$sql="INSERT INTO WILLOWPROPERTIES (seller, city, propstate, propvalue, numbedrooms ,propdesc ,picture,propsize) VALUES 
('$seller','$city','$state','$value','$bedrooms','$desc','$uploadimagedest','$size')";

if($conn->query($sql) ===true){
	echo "Data inserted successfully ";
  header('Location:dashboard.php');
} else {
	echo "Error with insertion: ".$conn->error;
}
echo "<a href='dashboard.php'>Go Back</a>";

?>

  </body>
</html>
