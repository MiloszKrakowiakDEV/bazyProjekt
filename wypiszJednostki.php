<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Jednostek</title>
    <link rel="stylesheet" href="stylMonitorowanie.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <p id="powrot"><a href="jednostki.php">POWRÓT</a></p>

    <?php
    $conn = new mysqli("localhost", "root", "", "bazyprojekt");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM jednostki";
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
        <th>Edytuj Jednostkę</th>
        <th>Usuń Jednostkę</th>
    </tr>
    EOD;
    echo $string;
        
    $gotowoscData = [];
    $personelData = [];
    $unitIds = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_row()) {
            echo "<tr>";
            for ($i = 0; $i < count($row); $i++) {
                echo "<td>".$row[$i]."</td>";
            }
            $nazwa = $row[0];
            $rodzaj = $row[1];
            $lokalizacja = $row[5];
            $stan = $row[2];
            $personel = $row[4];
            $wyposazenie = $row[3];
            $id = $row[6];
            echo '<td><a href="edytuj_jednostke_form.php?nazwa='. $nazwa.'&rodzaj='.$rodzaj.'&lokalizacja='.$lokalizacja.'&stan='.$stan.'&wyposazenie='.$wyposazenie.'&personel='.$personel.'&id='.$id.'">Edytuj</a></td>';
            echo '<td><a href="usun_jednostke.php?id='. $id.'">usun</a></td>';
            echo "</tr>";
            $gotowoscData[] = $stan;
            $personelData[] = $personel;
            $unitIds[] = $id;
        }
        echo "</table>";
    } else {
        echo "Brak wyników";
    }

    $conn->close();
    ?>

    <!-- Dropdown to select the chart type -->
    <p style="width: 10%%; position: relative; left: 40%; border: solid 1px black; display: inline-block; padding: 2px; background-color: #4CAF50; color: white;"><label for="chartType">Wybierz typ wykresu:</label>
    <select id="chartType">
        <option value="gotowosc">Gotowość Jednostek</option>
        <option value="personel">Ilość Jednostek</option>
    </select></p>

    <!-- Canvas for Chart placed after the table -->
    <canvas id="myChart" width="400" height="200"></canvas>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('myChart').getContext('2d');

            var gotowoscData = <?php echo json_encode($gotowoscData); ?>;
            var personelData = <?php echo json_encode($personelData); ?>;
            var unitIds = <?php echo json_encode($unitIds); ?>;

            var chartData = gotowoscData;

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: unitIds.map(id => `Jednostka numer ${id}`),
                    datasets: [{
                        label: 'Stan Gotowości',
                        data: chartData,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                    }]
                },
                options: {
                    indexAxis: 'y',
                    scales: {
                        x: {
                            beginAtZero: true
                        }
                    }
                }
            });

            document.getElementById('chartType').addEventListener('change', function() {
                var selectedValue = this.value;
                if (selectedValue === 'gotowosc') {
                    myChart.data.datasets[0].data = gotowoscData;
                    myChart.data.datasets[0].label = 'Stan Gotowości';
                } else if (selectedValue === 'personel') {
                    myChart.data.datasets[0].data = personelData;
                    myChart.data.datasets[0].label = 'Ilość Jednostek';
                }
                myChart.update();
            });
        });
    </script>
</body>
</html>
