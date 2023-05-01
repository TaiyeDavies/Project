<?php
//server connection
(include "connection.php");

// try {
//     $conn = new mysqli($server_name, $username, $password, $database_name);
//     echo "Connected Successfully"
//     }
//     catch (mysqli_sql_exception $e) {
//     $error = "Error: Couldn't Connect.";
//     echo $error;
//     }
//     conn -> close(); //close the connection to the database
$conn = new mysqli($server_name, $username, $password, $database_name);

//check if connection was successful
if($conn -> connect_error){
    die("Error: Couldn't connect. " . $conn -> connect_error);
}
echo "Connected Succesfully";

conn -> close(); //closee the connection to the database
?>