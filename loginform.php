<?php
session_start();
include('managesession.php');
LoggedIn();
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
        </button></a>
                                  
    </header>
   
    <p>Login:</p>
<form  action="login.php" method="POST">
	<table>

		<tr>
        <td>User:</td>
			<td>
				<input type="text" name="user"> 
			</td>
		</tr>
		<tr>
			<td>Pass:</td>
			<td>
				<input type="password" name="pass">
			</td>
		</tr>
    

	
	</table>
 <input type = "submit" value="Log-In"/>
</form>
    
    
    
  </body>
</html>
