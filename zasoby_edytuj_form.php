<?php
$id = $_GET["id"];
$nazwa = $_GET["nazwa"];
$amunicja = $_GET["amunicja"];
$paliwo=$_GET["paliwo"];
$medykamenty = $_GET["medykamenty"];
$logistyczny = $_GET["logistyczny"];
$bron = $_GET["bron"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj Zasoby Jednostki</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
    <link  rel="stylesheet" href="style.css">
</head>
<body>
<form action="zasoby_edytuj.php" method="post">
                <h2>Edytuj Zasoby Jednostki:</h2>
                <label>Nazwa:</label>
                <input type="text" name="nazwa" value="<?php echo $nazwa;?>">
                <label>Amunicja:</label>
                <input type="text" name="amunicja" value="<?php echo $amunicja;?>">
                <label>Paliwo:</label>
                <input type="text" name="paliwo" value="<?php echo $paliwo;?>">
                <label>Medykamenty:</label>
                <input type="text" name="medykamenty" value="<?php echo $medykamenty;?>">
                <label>Sprzęt Logistyczny:</label>
                <input type="text" name="logistyczny" value="<?php echo $logistyczny;?>">
                <label>Broń:</label>
                <input type="text" name="bron" value="<?php echo $bron;?>">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" value="Edytuj">
            </form>
</body>
</html>





