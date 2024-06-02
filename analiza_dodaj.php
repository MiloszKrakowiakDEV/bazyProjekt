<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazwa = $_POST['nazwa'];
    $zagrozenia = $_POST['zagrozenia'];
    $ruch_w = $_POST['ruch_wroga'];
    $teren = $_POST['teren'];
    $warunki = $_POST['warunki'];
    $data = $_POST['data'];
    $status = $_POST['status'];
    $opis = $_POST['opis'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO dane_wywiadowcze (nazwa, zagrozenia, ruch_wroga, teren, warunki, data_, status_, opis)
    VALUES ('$nazwa', '$zagrozenia', '$ruch_w', '$teren', '$warunki', '$data', 'Oczekuje', '$opis')";

    if ($conn->query($sql) === TRUE) {
        echo "Misja dodana pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: analiza_wypisz.php' );
}
?>