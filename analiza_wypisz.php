<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Raportów:</title>
    <link rel="stylesheet" href="stylMonitorowanie.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
</head>
<body>
    <p id="powrot"><a href="analiza.php">POWRÓT</a></p>
    <form action="export_csv.php" method="post">
        <button style="width: 10%%; position: relative; left: 46%; border: solid 1px black; display: inline-block; padding: 2px; background-color: #4CAF50; color: white;"type="submit">Zapisz jako CSV</button>
    </form>

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
        <th>Edytuj</th>
        <th>Usuń</th>
    </tr>
    EOD;
    echo $string;
        
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_row()) {
            echo "<tr>";
                for($i = 0; $i <= count($row)-1; $i++){
                    echo "<td>".$row[$i]."</td>";
                }  
                $nazwa = $row[0];
                $zagrozenia = $row[1];
                $ruch_wroga = $row[2];
                $teren = $row[3];
                $warunki = $row[4];
                $data = $row[5];
                $status = $row[6];
                $opis = $row[7];
                $id = $row[8];
            echo '<td><a href="analiza_edytuj_form.php?nazwa=' . $nazwa . '&zagrozenia=' . $zagrozenia . '&ruch_wroga=' . $ruch_wroga . '&teren=' . $teren . '&warunki=' . $warunki . '&data=' . $data . '&status=' . $status . '&opis=' . $opis . '&id=' . $id . '">Edytuj</a></td>';
            echo '<td><a href="analiza_usun.php?id='. $id.'">Usuń</a></td>';
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
