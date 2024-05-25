<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $cel = $_POST['cel'];
    $lokal = $_POST['lokalizacja'];
    $czas = $_POST['czas'];
    $jednostki = $_POST['jednostki'];
    $zasoby = $_POST['zasoby'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "UPDATE misje SET cel_misji='$cel', lokalizacja='$lokal', 
    czas_trwania='$czas', uczestniczace_jednostki='$jednostki', 
    potrzebne_zasoby='$zasoby' WHERE id='$id'";

    if ($conn->query($query) === TRUE) {
        echo "Misja zaktualizowana pomyślnie";
    } else {
        echo "Błąd: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: misje_wypisz.php' );
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $id = $_POST['id'];
//     $cel = $_POST['cel'];
//     $lokal = $_POST['lokalizacja'];
//     $czas = $_POST['czas'];
//     $jednostki = $_POST['jednostki'];
//     $zasoby = $_POST['zasoby'];

//     $conn = new mysqli("localhost", "root", "", "bazyprojekt");

//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $sql = "UPDATE misje SET cel_misji='$cel', lokalizacja='$lokal', czas_trwania='$czas', uczestniczace_jednostki='$jednostki', 
//     potrzebne_zasoby='$zasoby' WHERE id='$id'";
//     if ($conn->query($sql) === TRUE) {
//         echo "Misja zaktualizowana pomyślnie";
//     } else {
//         echo "Błąd: " . $sql . "<br>" . $conn->error;
//     }

//     $conn->close();
//     header('Location: misje_wypisz.php');
//     exit; 
// }
?>





