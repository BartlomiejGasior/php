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

// create database
$sql= "CREATE DATABASE mydb";

if(mysqli_query($conn, $sql)){
    echo "Utworzono bazę";
}
    else{
        echo "Błąd tworzenia danych: " . mysqli_error($conn);
}




mysqli_close($conn);

?>