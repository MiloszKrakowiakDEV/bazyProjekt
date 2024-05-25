<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista zadań:</title>
    <link  rel="stylesheet" href="stylMonitorowanie.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
</head>
<body><p id="powrot"><a href="#" onclick="history.go(-1)">POWRÓT</a></p>
    <?php
    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM zadania";
    $result = $conn->query($sql);
    $string = <<<EOD
        <table>
    <tr>
        <th>Nazwa</th>
        <th>Cel</th>
        <th>Termin Ostateczny</th>
        <th>Data Stworzenia</th>
        <th>Misja ID</th>
        <th>Jednostka ID</th>
    </tr>
    EOD;
        
    if ($result->num_rows > 0) {
        echo $string;
        while($row = $result->fetch_row()) {echo "<tr>";
                for($i = 0; $i <= count($row)-1; $i++){
                    echo "<td>".$row[$i]."</td>";
                }
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