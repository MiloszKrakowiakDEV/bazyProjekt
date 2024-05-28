<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $j_id = $_POST['jednostka_id'];
    $j_nazwa = $_POST['jednostka_nazwa'];
    $bron = $_POST['bron'];
    $amunicja = $_POST['amunicja'];
    $paliwo = $_POST['paliwo'];
    $meds = $_POST['meds'];
    $sprz_logi = $_POST['sprz_logi'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO zasoby (id_jednostki, nazwa_jednostki, bron, amunicja, paliwo, medykamenty, sprzet_logiczny)
    VALUES ('$j_id', '$j_nazwa', '$bron', '$amunicja', '$paliwo', '$meds', '$sprz_logi')";

    if ($conn->query($sql) === TRUE) {
        echo "Misja dodana pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: zasoby_wypisz.php' );
}
?>