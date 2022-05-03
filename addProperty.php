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
<form action="addPropertyToDB.php" method='post' enctype="multipart/form-data">
      <input type='text' name='city' placeholder='City'>
      <?PHP 
     
      generateInputField('state','text','State');
      generateInputField('value','text','Value');
      generateInputField('bedrooms','text','No. Of Bedrooms');
      generateInputField('sqft','text','Square Feet');
      generateInputField('desc','text','Description');
      generateInputField('fileToUpload','file','');
      
      ?>
      
      <button type='submit'>Submit</button>
      </form>

  </body>
</html>
