<?php
$nazwa = $_GET['nazwa'];
$zagrozenia = $_GET['zagrozenia'];
$ruch_wroga = $_GET['ruch_wroga'];
$teren = $_GET['teren'];
$warunki = $_GET['warunki'];
$data = $_GET['data'];
$status = $_GET['status'];
$opis = $_GET['opis'];
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj Raport</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
    <link  rel="stylesheet" href="style.css">
</head>
<body>
    <form action="analiza_edytuj.php" method="post">
  <h2>Edytuj Raport</h2>
  <label>Nazwa Raportu:</label>
  <input type="text" name="nazwa" value="<?php echo $nazwa; ?>">
  <label>Zagrożenia:</label>
  <input type="text" name="zagrozenia" value="<?php echo $zagrozenia; ?>">
  <label>Ruch Wroga:</label>
  <input type="text" name="ruch" value="<?php echo $ruch_wroga; ?>">
  <label>Teren:</label>
  <input type="text" name="teren" value="<?php echo $teren; ?>">
  <label>Warnuki:</label>
  <input type="text" name="warunki" value="<?php echo $warunki; ?>">
  <label>Data:</label>
  <input type="date" name="data" value="<?php echo $data; ?>">
  <label>Status:</label>
  <select name="status">
    <option value="Oczekuje" selected>Oczekuje</option>
    <option value="Rozpatrzony">Rozpatrzony</option>
    <option value="Odrzucony">Odrzucony</option>
  </select>
  <label>Opis:</label>
  <input type="text" name="opis" value="<?php echo $opis; ?>">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="submit" value="Edytuj">
</form>

</body>
</html>





