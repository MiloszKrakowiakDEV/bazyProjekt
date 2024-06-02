<?php
$id = $_GET["id"];
$nazwa = $_GET["nazwa"];
$cel = $_GET["cel"];
$lokalizacja=$_GET["lokalizacja"];
$czas = $_GET["czas"];
$jednostki = $_GET["jednostki"];
$zasoby = $_GET["zasoby"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj Misje</title>
    <link  rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
</head>
<body>
<form action="misje_edytuj_zatwierdzone.php" method="post">
                <h2>Edytuj Misję:</h2>
                <label>Nazwa:</label>
                <input type="text" name="nazwa" value="<?php echo $nazwa;?>">
                <label>Cel:</label>
                <input type="text" name="cel" value="<?php echo $cel;?>">
                <label>Lokalizacja:</label>
                <input type="text" name="lokalizacja" value="<?php echo $lokalizacja;?>">
                <label>Termin Ostateczny:</label>
                <input type="date" name="czas" value="<?php echo $czas;?>">
                <label>Uczestniczące jednostki:</label>
                <input type="text" name="jednostki" value="<?php echo $jednostki;?>">
                <label>Potrzebne zasoby:</label>
                <input type="text" name="zasoby" value="<?php echo $zasoby;?>">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" value="Edytuj">
            </form>
</body>
</html>





