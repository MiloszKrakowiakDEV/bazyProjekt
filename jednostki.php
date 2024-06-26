<!DOCTYPE html>
<html>
<head>
    <title>Jednostki Wojskowe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
</head>
<body>  
    <div id = "jednostki_body"></div>
    <div class="container">
        
        <h1>Jednostki Wojskowe</h1>
        <p id="powrot"><a href="index.html">POWRÓT</a></p>
        <p id="powrot"><a href="wypiszJednostki.php">LISTA JEDNOSTEK</a></p>
        <p id="powrot"><a href="zadania_wypisz.php">LISTA ZADAŃ</a></p>
        <div class="forms-row">
            <form action="dodaj_jednostke.php" method="post" class="full-width">
                <h2>Dodaj Jednostkę</h2>
                <label>Nazwa Jednostki:</label>
                <input type="text" name="nazwa_jednostki">
                <label>Rodzaj Jednostki:</label>
                <input type="text" name="rodzaj_jednostki">
                <label>Stan Gotowości:</label>
                <input type="text" name="stan_gotowosci">
                <label>Lokalizacja:</label>
                <input type="text" name="lokalizacja">
                <label>Wyposażenie:</label>
                <input type="text" name="wyposazenie">
                <label>Liczba Personelu:</label>
                <input type="number" name="liczba_personelu">
                <input type="submit" value="Dodaj">
            </form>
            
        </div>
        
        <div class="forms-row">
        <form action="monitoruj_jednostki.php" method="get" >
            <h2>Monitoruj Jednostki</h2>
            <label>ID Jednostki:</label>
            <input type="number" name="id">
            <input type="submit" value="Monitoruj">
        </form>
            
            <form action="przydziel_misje.php" method="post">
                <h2>Przydziel Jednostkę do Misji</h2>
                <label>ID Jednostki:</label>
                <input type="number" name="id_jednostki">
                <label>ID Misji:</label>
                <input type="number" name="id_misji">
                <label>Nazwa Zadania:</label>
                <input type="text" name="nazwa_zadania">
                <input type="submit" value="Przydziel">
            </form>
        </div>
        
        
    </div>
</body>
</html>
