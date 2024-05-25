<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_jednostki'];
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

    $sql = "UPDATE jednostki SET nazwa='$nazwa', rodzaj='$rodzaj', stan_gotowosci='$stan', lokalizacja='$lokalizacja', wyposazenie='$wyposazenie', liczba_personelu='$personel' WHERE jednostkaID='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Jednostka zaktualizowana pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: wypiszJednostki.php' );
}
?>
