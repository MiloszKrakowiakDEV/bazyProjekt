<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$id = $_POST['id'];
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

    $query = "UPDATE dane_wywiadowcze SET nazwa='$nazwa', zagrozenia='$zagrozenia', 
    ruch_wroga='$ruch_w', teren='$teren', warunki='$warunki', 
    data_='$data', status_='$status', opis='$opis' WHERE nazwa='$nazwa'";


    if ($conn->query($query) === TRUE) {
        echo "Misja zaktualizowana pomyślnie";
    } else {
        echo "Błąd: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: analiza_wypisz.php' );
}
?>





