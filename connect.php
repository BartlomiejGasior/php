<?php
$servername = "localhost";
$username = "root";
$password =  "";
// connect to database
$conn = mysqli_connect($servername, $username, $password);
// check connect
if(!$conn){
    die("Nie udane połączenie: " . mysqli_connect_error());
}
echo "Połączenie udane";
?>