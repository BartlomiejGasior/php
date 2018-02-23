<?php
$servername = "localhost";
$username = "root";
$password =  "";
$dbname = "mydb";

// connect to database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connect
if(!$conn){
    die("Nie udane połączenie: " . mysqli_connect_error());
}

$sql = "UPDATE myUsers SET lastname = '1' WHERE id='1'";

if(mysqli_query($conn, $sql)){
    echo "Zmieniono";
}
else{
    echo"Błąd przy zmianie: " . mysqli_error($conn);
     }



mysqli_close($conn);
?>