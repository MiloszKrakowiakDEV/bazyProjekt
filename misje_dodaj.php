<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazwa = $_POST['nazwa'];
    $cel = $_POST['cel'];
    $lokal = $_POST['lokalizacja'];
    $czas = $_POST['czas'];
    $jednostki = $_POST['jednostki'];
    $zasoby = $_POST['zasoby'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO misje (nazwa, cel_misji, lokalizacja, czas_trwania, uczestniczace_jednostki, potrzebne_zasoby) 
    VALUES ('$nazwa', '$cel', '$lokal', '$czas', '$jednostki', '$zasoby')";

    if ($conn->query($sql) === TRUE) {
        echo "Misja dodana pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: misje_wypisz.php' );
}
?>
