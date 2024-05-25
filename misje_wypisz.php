<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista misji:</title>
    <link  rel="stylesheet" href="stylMonitorowanie.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
</head>
<body><p id="powrot"><a href="misje.php">POWRÓT</a></p>
    <?php
    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM misje";
    $result = $conn->query($sql);
    $string = <<<EOD
        <table>
    <tr>
        <th>Cel</th>
        <th>Lokalizacja</th>
        <th>Czas Trwania</th>
        <th>Uczestniczące Jednostki</th>
        <th>Potrzebne Zasoby</th>
        <th>ID</th>
    </tr>
    EOD;
    echo $string;
        
    if ($result->num_rows > 0) {
        while($row = $result->fetch_row()) {
            // echo "<p id='result'>ID: " . $row["jednostkaID"]. " - Nazwa: " . $row["nazwa"]. " - Rodzaj: " . $row["rodzaj"]. " - Stan: " . $row["stan_gotowosci"]. " - Lokalizacja: " . $row["lokalizacja"]. " - Wyposażenie: " . $row["wyposazenie"]. " - Liczba Personelu: " . $row["liczba_personelu"]. "<br></p>";
            echo "<tr>";
                // echo "<td>".$row[1]."</td>";
                // echo "<td>".$row[2]."</td>";
                // echo "<td>".$row[3]."</td>";
                // echo "<td>".$row[4]."</td>";
                // echo "<td>".$row[5]."</td>";
                // echo "<td>".$row[0]."</td>";
                for($i = 1; $i <= count($row)-1; $i++){
                    echo "<td>".$row[$i]."</td>";
                }
                echo "<td>".$row[0]."</td>";    
                }
            echo "</tr>";
        
        }
     else {
        echo "Brak wyników";
    }

    $conn->close();
    ?>
</body>
</html>