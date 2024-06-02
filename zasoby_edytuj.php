<?php

    $j_id = $_POST['id'];
    $j_nazwa = $_POST['nazwa'];
    $bron = $_POST['bron'];
    $amunicja = $_POST['amunicja'];
    $paliwo = $_POST['paliwo'];
    $meds = $_POST['medykamenty'];
    $sprz_logi = $_POST['logistyczny'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "UPDATE zasoby SET id_jednostki='$j_id', nazwa_jednostki='$j_nazwa',
    bron='$bron', amunicja='$amunicja', paliwo='$paliwo', medykamenty='$meds', 
    sprzet_logiczny='$sprz_logi' WHERE id_jednostki='$j_id'";

    if ($conn->query($query) === TRUE) {
        echo "Misja zaktualizowana pomyślnie";
    } else {
        echo "Błąd: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: zasoby_wypisz.php' );

?>





