<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if($link = mysql_connect('localghost', 'root','','testowa')):
            //udało się połączyć z bazą
            $query='SELECT * FROM testowa';
            if ($result = mysqli_query($link, $query)) {
                
            }
            //udało się wykonać zapytanie
        ?>
        <table>
            <tr><th>Imie</th>
                <th>Nazwisko</th>
            </tr>
            <?php
            //wyświetlanie wiersze w tabeli testowa
            while ($row = mysqli_fetch_row($result) ) {
                
            }
            ?>
        </table>

    <p>connect to server</p>
</body>
</html>