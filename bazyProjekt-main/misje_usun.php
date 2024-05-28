<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_misji'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM misje WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Jednostka usunięta pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: misje_wypisz.php' );
}
?>
