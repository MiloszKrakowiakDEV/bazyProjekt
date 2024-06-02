<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $mid = $_GET['misja_id'];
    $jid = $_GET['jednostka_id'];
    $cel = $_GET['cel'];
    $id = $_GET['id'];
    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM zadania WHERE jednostka_id = $jid AND misja_id = $mid AND cel = '$cel' AND id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Jednostka usunięta pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    
    header( 'Location: zadania_wypisz.php' );
    $conn->close();

?>
</body>
</html>
