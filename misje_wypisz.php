<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Misji:</title>
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
        <th>Nazwa</th>
        <th>Cel</th>
        <th>Lokalizacja</th>
        <th>Termin Ostateczny</th>
        <th>Uczestniczące Jednostki</th>
        <th>Potrzebne Zasoby</th>
        <th>ID</th>
        <th>Edytuj Misję</th>
        <th>Usuń Misję</th>
    </tr>
    EOD;
    echo $string;
        
    if ($result->num_rows > 0) {
        while($row = $result->fetch_row()) {
            // echo "<p id='result'>ID: " . $row["jednostkaID"]. " - Nazwa: " . $row["nazwa"]. " - Rodzaj: " . $row["rodzaj"]. " - Stan: " . $row["stan_gotowosci"]. " - Lokalizacja: " . $row["lokalizacja"]. " - Wyposażenie: " . $row["wyposazenie"]. " - Liczba Personelu: " . $row["liczba_personelu"]. "<br></p>";
            echo "<tr>";
                echo "<td>".$row[6]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "<td>".$row[0]."</td>";
                $nazwa=$row[6];
                $cel = $row[1];
                $lokalizacja=$row[2];
                $czas = $row[3];
                $jednostki = $row[4];
                $zasoby = $row[5];
                $id = $row[0];
                echo '<td><a href="misje_edytuj.php?nazwa='. $nazwa.'&cel='.$cel.'&lokalizacja='.$lokalizacja.'&czas='.$czas.'&jednostki='.$jednostki.'&zasoby='.$zasoby.'&id='.$id.'">Edytuj</a></td>';
                echo '<td><a href="misje_usun.php?id='. $id.'">usun</a></td>';
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