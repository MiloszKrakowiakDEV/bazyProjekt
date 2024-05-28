<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista raportów:</title>
    <link  rel="stylesheet" href="stylMonitorowanie.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
</head>
<body><p id="powrot"><a href="analiza.php">POWRÓT</a></p><a>zapisz jako pdf</a>
    <?php
    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM dane_wywiadowcze";
    $result = $conn->query($sql);
    $string = <<<EOD
        <table>
    <tr>
        <th>Nazwa</th>
        <th>Zagrożenia</th>
        <th>Ruch Wroga</th>
        <th>Teren</th>
        <th>Warunki</th>
        <th>Data</th>
        <th>Status</th>
        <th>Opis</th>
        <th>ID</th>
    </tr>
    EOD;
    echo $string;
        
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_row()) {
            echo "<tr>";
                for($i = 0; $i <= count($row)-1; $i++){
                    echo "<td>".$row[$i]."</td>";
                }  
            echo "</tr>";
        } 
    }
    else {
        echo "Brak wyników";
    }

    $conn->close();
    ?>
</body>
</html>