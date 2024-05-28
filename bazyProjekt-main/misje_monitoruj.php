<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylMonitorowanie.css">
</head>
<body>
    <p id="powrot"><a href="misje.php">POWRÓT</a></p>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM misje WHERE id='$id'";
    $result = $conn->query($sql);
    $string = <<<EOD
        <table>
    <tr>
        <th>Nazwa</th>
        <th>Cel</th>
        <th>Lokalizacja</th>
        <th>Czas Trwania</th>
        <th>Uczestniczące Jednostki</th>
        <th>Potrzebne Zasoby</th>
        <th>ID</th>
    </tr>
    EOD;
    
    if ($result->num_rows > 0) {
        echo $string;
        while($row = $result->fetch_row()) {
         echo "<tr>";
            echo "<td>".$row[6]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "<td>".$row[0]."</td>";   
                }
            echo "</tr>";
        
        }
     else {
        echo "Brak wyników";
    }

    $conn->close();
}
    ?>
</body>
</html>

