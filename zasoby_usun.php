<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $id = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM zasoby WHERE id_jednostki=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Jednostka usunięta pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    
    header( 'Location: zasoby_wypisz.php' );
    $conn->close();

?>
</body>
</html>
