<?php

$nazwa = $_GET["nazwa"];
$cel = $_GET["cel"];
$czas_trwania=$_GET["czas_trwania"];
$data_stworzenia = $_GET["data_stworzenia"];
$jednostka_id = $_GET["jednostka_id"];
$misja_id = $_GET["misja_id"];
$id = $_GET['id'];


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
<form action="zadania_edytuj.php" method="post">
                <h2>Edytuj Zadanie:</h2>
                <label>Nazwa:</label>
                <input type="text" name="nazwa" value="<?php echo $nazwa;?>">
                <label>Cel:</label>
                <input type="text" name="cel" value="<?php echo $cel;?>">
                <label>Termin Ostateczny:</label>
                <input type="date" name="czas_trwania" value="<?php echo $czas_trwania;?>">
                <label>ID Jednostki:</label>
                <input type="number" name="jednostka_id" value="<?php echo $jednostka_id;?>">
                <label>ID Misji:</label>
                <input type="number" name="misja_id" value="<?php echo $misja_id;?>">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" value="Edytuj">
            </form>
</body>
</html>





