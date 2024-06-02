<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
<title>Edytuj jednostkę</title>
</head>
<body>
<?php

    $id = $_POST['id'];
    $nazwa = $_POST['nazwa'];
    $rodzaj = $_POST['rodzaj'];
    $stan = $_POST['stan'];
    $lokalizacja = $_POST['lokalizacja'];
    $wyposazenie = $_POST['wyposazenie'];
    $personel = $_POST['personel'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE jednostki SET nazwa='$nazwa', rodzaj='$rodzaj', 
    stan_gotowosci='$stan', lokalizacja='$lokalizacja', 
    wyposazenie='$wyposazenie', liczba_personelu='$personel' 
    WHERE jednostkaID='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Jednostka zaktualizowana pomyślnie";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header( 'Location: wypiszJednostki.php' );

?>
</body>
</html>