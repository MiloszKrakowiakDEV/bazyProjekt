<?php

    $nazwa = $_POST['nazwa'];
    $cel = $_POST['cel'];
    $lokal = $_POST['lokalizacja'];
    $czas = $_POST['czas'];
    $jednostki = $_POST['jednostki'];
    $zasoby = $_POST['zasoby'];
    $id = $_POST["id"];
    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE misje SET cel_misji = '$cel', lokalizacja = '$lokal', nazwa = '$nazwa', czas_trwania = '$czas', potrzebne_zasoby = '$zasoby', uczestniczace_jednostki = '$jednostki' where id = $id;";

    if ($conn->query($sql) === TRUE) {
        echo "Misja dodana pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: misje_wypisz.php' );

?>
