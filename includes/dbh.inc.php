<?php   //this file is database handler in includes folder

    $servername = "den1.mysql4.gear.host";     //name of the server generated in Gearhost
    $dBUsername = "logindatabase11";          //username accessing the server generated in Gearhost
    $dBPassword = "Uq6ftwl4?-97";             //password generated for Gearhost username
    $dBName = "logindatabase11"; //the database name that I created in phpMyAdmin 

    //need to run the connection with the database
    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

    //checking if the connection with the server has failed or not 
    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }           
?>