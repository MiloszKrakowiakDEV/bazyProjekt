<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Zadań:</title>
    <link  rel="stylesheet" href="stylMonitorowanie.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
</head>
<body><p id="powrot"><a href="index.html">POWRÓT</a></p>
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
        <th>ID</th>
        <th>Edytuj</th>
        <th>Usuń</th>
    </tr>
    EOD;
        
    if ($result->num_rows > 0) {
        echo $string;
        while($row = $result->fetch_row()) {echo "<tr>";
                for($i = 0; $i <= count($row)-1; $i++){
                    echo "<td>".$row[$i]."</td>";
                }
            
            $nazwa=$row[0];
            $cel = $row[1];
            $czas_trwania=$row[2];
            $data_stworzenia = $row[3];
            $misja_id = $row[4];
            $jednostka_id = $row[5];
            $id = $row[6];
            echo '<td><a href="zadania_edytuj_form.php?nazwa='. $nazwa.'&cel='.$cel.'&czas_trwania='.$czas_trwania.'&data_stworzenia='.$data_stworzenia.'&jednostka_id='.$jednostka_id.'&misja_id='.$misja_id.'&id='.$id.'">Edytuj</a></td>';
            echo '<td><a href="zadania_usun.php?misja_id='. $misja_id.'&jednostka_id='.$jednostka_id.'&cel='.$cel.'&id='.$id.'">Usuń</a></td>';
            echo "</tr>";
        
        }}
     else {
        echo "Brak wyników";
    }

    $conn->close();
    ?>
</body>
</html>