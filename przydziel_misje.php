<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jednostka_id = $_POST['id_jednostki'];
    $misja_id = $_POST['id_misji'];
    $m_nazwa = $_POST["nazwa_zadania"];
    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // $m_cel_query = "SELECT cel_misji FROM misje WHERE id = '$misja_id'";
    // $result = $conn->query($m_cel_query);
    // $m_nazwa_query = "SELECT nazwa FROM misje WHERE id = '$misja_id'";
    // $result2 = $conn->query($m_nazwa_query);
    // $m_czas_query = "SELECT czas_trwania FROM misje WHERE id = '$misja_id'";
    // $result3 = $conn->query($m_czas_query);

    // if ($result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    //     $m_cel = $row['cel_misji'];
    //     $m_nazwa = $row['nazwa'];
    //     $m_czas = $row['czas_trwania'];

    $query = "SELECT cel_misji, nazwa, czas_trwania FROM misje WHERE id = '$misja_id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $m_cel = $row['cel_misji'];
        // $m_nazwa = $row['nazwa'];
        $m_czas = $row['czas_trwania'];

        

        // Insert into 'zadania' table
        $sql = "INSERT INTO zadania (cel, czas_trwania, nazwa, jednostka_id, misja_id) 
                VALUES ('$m_cel', '$m_czas', '$m_nazwa', '$jednostka_id', '$misja_id')";
        if ($conn->query($sql) === TRUE) {
            echo "Jednostka została przydzielona do misji pomyślnie";
        } else {
            echo "Błąd: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Nie znaleziono misji o podanym ID.";
    }

    $conn->close();
    header('Location: zadania_wypisz.php');
    exit();
}
?>



