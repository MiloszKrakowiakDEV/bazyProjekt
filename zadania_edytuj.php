<?php

$nazwa = $_POST["nazwa"];
$cel = $_POST["cel"];
$czas_trwania=$_POST["czas_trwania"];
$id = $_POST['id'];
$jednostka_id = $_POST["jednostka_id"];
$misja_id = $_POST["misja_id"];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "UPDATE zadania SET nazwa='$nazwa', cel='$cel',
    czas_trwania='$czas_trwania', misja_id='$misja_id', jednostka_id='$jednostka_id' WHERE  id = '$id' ";

    if ($conn->query($query) === TRUE) {
        echo "Misja zaktualizowana pomyślnie";
    } else {
        echo "Błąd: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: zadania_wypisz.php' );

?>





