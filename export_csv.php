<?php
$conn = new mysqli("localhost", "root", "", "bazyprojekt");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dane_wywiadowcze";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $filename = "exported_data.csv";
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename="'.$filename.'"');

    $fp = fopen('php://output', 'w');

    // Add column headers
    $headers = ['Nazwa', 'Zagrożenia', 'Ruch Wroga', 'Teren', 'Warunki', 'Data', 'Status', 'Opis', 'ID'];
    fputcsv($fp, $headers);

    // Add rows to CSV
    while($row = $result->fetch_assoc()) {
        fputcsv($fp, $row);
    }

    fclose($fp);
    exit();
} else {
    echo "Brak wyników";
}

$conn->close();
?>
