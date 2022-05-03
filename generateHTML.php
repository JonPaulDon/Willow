<?php

function generateInputField($name,$type,$placeholder){
    $temp="
    <input type='$type' name='$name' placeholder='$placeholder'>
    ";
    echo $temp;
}
function generateTableRow($type,$value){
    $ele="
    <tr>
    <td>$type</td>
    <td>$value</td>
    </tr>
    ";
    echo $ele;
}
function generatePropCard($city,$state,$value,$bedrooms,$sqft,$desc,$img,$seller){
echo "<div class='propertycard'>";
    echo "<table>";
    generateTableRow('Seller',$seller);
    generateTableRow('City',$city);
    generateTableRow('State',$state);
    generateTableRow('Price',$value);
    generateTableRow('Bedrooms',$bedrooms);
      generateTableRow('Square Feet',$sqft);
      generateTableRow('Description',$desc);
    echo "</table>";

    echo "
    <img height='300' width='auto' src='$img' alt='propimage'>
    </div>
    ";
    

}

function generateBuyerDash($user){
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
    
    $sql="SELECT id,seller,city ,propstate,propvalue,numbedrooms,propdesc,picture,PROPSIZE FROM WILLOWPROPERTIES";
    $result=$conn->query($sql);
    
    if($result->num_rows >0){

    while($row= $result->fetch_assoc()){

if($_SESSION['username'] != $row['seller']){



    generatePropCard($row['city'],$row['propstate'],$row['propvalue'],$row['numbedrooms'],$row['PROPSIZE'],$row['propdesc'],$row['picture'],$row['seller']);  
}
    }
    }else {
      echo "0 Results";
    }

}

function generateDash(){
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
    
    $sql="SELECT id,seller,city ,propstate,propvalue,numbedrooms,propdesc,picture,PROPSIZE FROM WILLOWPROPERTIES";
    $result=$conn->query($sql);
    
  if($result->num_rows >0){

    while($row= $result->fetch_assoc()){
        if($_SESSION['username'] == $row['seller']){
            generatePropCard($row['city'],$row['propstate'],$row['propvalue'],$row['numbedrooms'],$row['PROPSIZE'],$row['propdesc'],$row['picture'],$row['seller']);  
        }

    }
  }else {
      echo "0 Results";
  }

}



?>