<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$id = $_POST['id'];
    $nazwa = $_POST['nazwa'];
    $zagrozenia = $_POST['zagrozenia'];
    $ruch_wroga = $_POST['ruch'];
    $teren = $_POST['teren'];
    $warunki = $_POST['warunki'];
    $data = $_POST['data'];
    $status = $_POST['status'];
    $opis = $_POST['opis'];
    $id = $_POST['id'];    

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "UPDATE dane_wywiadowcze SET nazwa='$nazwa', zagrozenia='$zagrozenia', 
    ruch_wroga='$ruch_wroga', teren='$teren', warunki='$warunki', 
    data_='$data', status_='$status', opis='$opis' WHERE id='$id'";

    $conn->query($query);
    $conn->close();
    header( 'Location: analiza_wypisz.php' );
}
?>





