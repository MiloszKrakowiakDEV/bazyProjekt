<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Zasobów:</title>
    <link  rel="stylesheet" href="stylMonitorowanie.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
</head>
<body><p id="powrot"><a href="zasoby.php">POWRÓT</a></p>
    <?php
    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM zasoby";
    $result = $conn->query($sql);
    $string = <<<EOD
        <table>
    <tr>
        <th>Jednostka ID</th>
        <th>Jednostka Nazwa</th>
        <th>Broń</th>
        <th>Amunicja</th>
        <th>Paliwo</th>
        <th>Medykamenty</th>
        <th>Sprzęt Logiczny</th>
        <th>Edytuj</th>
        <th>Usuń</th>
    </tr>
    EOD;
    
        
    if ($result->num_rows > 0) {
        echo $string;
        while($row = $result->fetch_row()) {
            echo "<tr>";
                
                foreach($row as $value) {
                if(empty($value)) {
                    echo "<td>n/a</td>";
                } else {
                    echo "<td>".$value."</td>";
                }
                }
            
                $nazwa=$row[1]; /*done*/
                $logistyczny = $row[6]; /*done*/
                $bron=$row[2]; /*done*/
                $amunicja = $row[3];
                $paliwo = $row[4];
                $medykamenty = $row[5];
                $id = $row[0]; /*done*/
                echo '<td><a href="zasoby_edytuj_form.php?nazwa='. $nazwa.'&logistyczny='.$logistyczny.'&bron='.$bron.'&amunicja='.$amunicja.'&paliwo='.$paliwo.'&medykamenty='.$medykamenty.'&id='.$id.'">Edytuj</a></td>';
                echo '<td><a href="zasoby_usun.php?id='. $id.'">usun</a></td>';
                echo "</tr>";
        
        }}
    

    $conn->close();
    ?>
</body>
</html>