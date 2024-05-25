<!DOCTYPE html>
<html>
<head>
    <title>Misje Wojskowe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
</head>
<body>  
    <div id = "misje_body"></div>
    <div class="container">
        
        <h1>Misje Wojskowe</h1>
        <p id="powrot"><a href="index.html">POWRÓT</a></p>
        <p id="powrot"><a href="misje_wypisz.php">LISTA MISJI</a></p>
        <div class="forms-row">
            <form action="misje_dodaj.php" method="post">
                <h2>Dodaj Misję:</h2>
                <label>Cel:</label>
                <input type="text" name="cel">
                <label>Lokalizacja:</label>
                <input type="text" name="lokalizacja">
                <label>Czas Trwania:</label>
                <input type="text" name="czas">
                <label>Uczestniczące jednostki:</label>
                <input type="text" name="jednostki">
                <label>Potrzebne zasoby:</label>
                <input type="text" name="zasoby">
                <input type="submit" value="Edytuj">
            </form>
            
            <form action="misje_edytuj.php" method="post">
                <h2>Edytuj Misję:</h2>
                <label>ID Misji:</label>
                <input type="number" name="id">
                <label>Cel:</label>
                <input type="text" name="cel">
                <label>Lokalizacja:</label>
                <input type="text" name="lokalizacja">
                <label>Czas Trwania:</label>
                <input type="text" name="czas">
                <label>Uczestniczące jednostki:</label>
                <input type="text" name="jednostki">
                <label>Potrzebne zasoby:</label>
                <input type="text" name="zasoby">
                <input type="submit" value="Edytuj">
            </form>
        </div>
        
        <div class="forms-row">
            <form action="misje_usun.php" method="post">
                <h2>Usuń Misję</h2>
                <label>ID Misji:</label>
                <input type="number" name="id_misji">
                <input type="submit" value="Usuń">
            </form>
            
            <form action="przydziel_misje.php" method="post">
                <h2>Przydziel Jednostkę do Misji</h2>
                <label>ID Jednostki:</label>
                <input type="number" name="id_jednostki">
                <label>ID Misji:</label>
                <input type="number" name="id_misji">
                <input type="submit" value="Przydziel">
            </form>
        </div>
        
        <form action="misje_monitoruj.php" method="get" class="full-width">
            <h2>Monitoruj Misje</h2>
            <label>ID Misji:</label>
            <input type="number" name="id">
            <input type="submit" value="Monitoruj">
        </form>
    </div>
</body>
</html>
