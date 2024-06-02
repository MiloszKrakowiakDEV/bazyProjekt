<head>
<link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
<title>Edytuj Jednostkę</title>
</head>
<?php
$id = $_GET['id'];
$nazwa = $_GET['nazwa'];
$rodzaj = $_GET['rodzaj'];
$stan = $_GET['stan'];
$lokalizacja = $_GET['lokalizacja'];
$wyposazenie = $_GET['wyposazenie'];
$personel = $_GET['personel'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="style.css">
</head>
<body>
            <form action="edytuj_jednostke.php" method="post">
                <h2>Edytuj Jednostkę</h2>
                <label>Nazwa Jednostki:</label>
                <input type="text" name="nazwa" value="<?php echo $nazwa;?>">
                <label>Rodzaj Jednostki:</label>
                <input type="text" name="rodzaj"value="<?php echo $rodzaj;?>">
                <label>Stan Gotowości:</label>
                <input type="text" name="stan" value="<?php echo $stan;?>">
                <label>Lokalizacja:</label>
                <input type="text" name="lokalizacja" value="<?php echo $lokalizacja;?>">
                <label>Wyposażenie:</label>
                <input type="text" name="wyposazenie" value="<?php echo $wyposazenie;?>">
                <label>Liczba Personelu:</label>
                <input type="number" name="personel" value="<?php echo $personel;?>"> 
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" value="Edytuj">
            </form>
</body>
</html>





