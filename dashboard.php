<?php
session_start();
include('generateHTML.php');
include('managesession.php');
notLoggedIn();
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
        <li> <a href="logout.php">Log Out</a> </li>
        </ul>
      </nav>
      <a class="cta" href="#" onclick="displayPhone()"><button>
        Contact
        </button></a>
                                  
    </header>

  
    <?php
    echo "Welcome ".$_SESSION['username']."<BR>";
    ?>
    <p>
      This is the seller's dashboard, your properties are listed below.<BR>
      Click the plus button to add a new property.<BR>
      <a href='buyerdashboard.php'>Click here to view the buyer's dashboard</a>
    </p>
    <a href="addProperty.php"><img height="50" width="auto" src="plusicon.png" alt="plusicon"></a>
<div class="dashboard">
    <?php
    /*
if(file_exists('images/Triangle.png')){
  echo "Uploaded File Exists <BR>";
}else echo "Uploaded File does not exist";
generatePropCard($city,$state,$value,$bedrooms,$sqft,$desc,$img)
*/
   // generatePropCard('mycity','mystate','myvalue','mybedrooms','mysqft','mydesc','doglogo.png','seller');

    generateDash();

    ?>
</div>
  </body>
</html>
