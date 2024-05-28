<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylMonitorowanie.css">
</head>
<body>
<p id="powrot"><a href="jednostki.php">POWRÓT</a></p>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_jednostki = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM jednostki WHERE jednostkaID='$id_jednostki'";
    $result = $conn->query($sql);
    $string = <<<EOD
        <table>
    <tr>
        <th>Nazwa</th>
        <th>Rodzaj</th>
        <th>Stan gotowości</th>
        <th>Wyposażenie</th>
        <th>Liczba personelu</th>
        <th>Lokalizacja</th>
        <th>ID jednostki</th>
    </tr>
    EOD;
        
    if ($result->num_rows > 0) {
        echo $string;
        while($row = $result->fetch_row()) {
            // echo "<p id='result'>ID: " . $row["jednostkaID"]. " - Nazwa: " . $row["nazwa"]. " - Rodzaj: " . $row["rodzaj"]. " - Stan: " . $row["stan_gotowosci"]. " - Lokalizacja: " . $row["lokalizacja"]. " - Wyposażenie: " . $row["wyposazenie"]. " - Liczba Personelu: " . $row["liczba_personelu"]. "<br></p>";
            echo "<tr>";
            for($i = 0; $i <= count($row)-1; $i++){
                echo "<td>".$row[$i]."</td>";
            }
            echo "</tr>";
        
        }
    } else {
        echo "Brak wyników";
    }

    $conn->close();
    
}
?>
</body>
</html>