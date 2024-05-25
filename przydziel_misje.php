<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jednostka_id = $_POST['id_jednostki'];
    $misja_id = $_POST['id_misji'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO zadania (jednostka_id, misja_id) VALUES ('$jednostka_id', '$misja_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Jednostka została przydzielona do misji pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: wypiszJednostki.php' );
}
?>
