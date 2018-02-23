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

// insert to table
$sql = "INSERT INTO myUsers(username, firstname, lastname, email)
VALUES('user10', 'Adam', 'Jablko', 'adam@jablko.heven');";

$sql .= "INSERT INTO myUsers(username, firstname, lastname, email)
        VALUES( 'user11', 'Adam', 'Jablko', 'adam@jablko.heven'); ";

$sql .= "INSERT INTO myUsers(username, firstname, lastname, email)
        VALUES( 'user12', 'Ewa', 'Jablko', 'ewa@jablko.heven');";

$sql .= "INSERT INTO myUsers(username, firstname, lastname, email)
        VALUES( 'user13', 'Wonsz', 'Jablko', 'wonsz@jablko.heven');";


if(mysqli_multi_query($conn, $sql)){
    echo "Dodano";
}
else{
    echo "Error " . $sql . "<br>" . mysqli_error($conn);
}
?>