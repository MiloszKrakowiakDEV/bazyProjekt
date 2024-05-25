<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazwa = $_POST['nazwa_jednostki'];
    $rodzaj = $_POST['rodzaj_jednostki'];
    $stan = $_POST['stan_gotowosci'];
    $lokalizacja = $_POST['lokalizacja'];
    $wyposazenie = $_POST['wyposazenie'];
    $personel = $_POST['liczba_personelu'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO jednostki (nazwa, rodzaj, stan_gotowosci, lokalizacja, wyposazenie, liczba_personelu) VALUES ('$nazwa', '$rodzaj', '$stan', '$lokalizacja', '$wyposazenie', '$personel')";

    if ($conn->query($sql) === TRUE) {
        echo "Jednostka dodana pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: wypiszJednostki.php' );
}
?>
