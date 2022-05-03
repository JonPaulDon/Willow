<?php
session_start();
function LoggedIn(){
    if(isset($_SESSION['username'])){
        header('Location:dashboard.php');
    }

}
function notLoggedIn(){
    if(!isset($_SESSION['username'])){
        header('Location:loginform.php');
    }
}



?>