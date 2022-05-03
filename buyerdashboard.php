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
      This is the buyer's dashboard, properties for sale are listed below.
      <a href='dashboard.php'>Click here to view the seller's dashboard</a>
    </p>
    
<div class="dashboard">
    <?php
    /*
if(file_exists('images/Triangle.png')){
  echo "Uploaded File Exists <BR>";
}else echo "Uploaded File does not exist";
generatePropCard($city,$state,$value,$bedrooms,$sqft,$desc,$img)
*/
   // generatePropCard('mycity','mystate','myvalue','mybedrooms','mysqft','mydesc','doglogo.png','seller');
    generateBuyerDash($_SESSION['username']);

    ?>
</div>
  </body>
</html>
