<!DOCTYPE html>
<html>
<head>
    <title>Zasoby Wojskowe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
</head>
<body>  
    <div id = "zasoby_body"></div>
    <div class="container">
        
        <h1>Zasoby Wojskowe</h1>
        <p id="powrot"><a href="index.html">POWRÓT</a></p>
        <p id="powrot"><a href="zasoby_wypisz.php">LISTA ZASOBÓW</a></p>
        <div class="forms-row">
            <form action="zasoby_dodaj.php" method="post" class="full-width">
                <h2>Dodaj Zasób:</h2>
                <label>ID Jednostki:</label>
                <input type="text" name="jednostka_id">
                <label>Nazwa Jednostki:</label>
                <input type="text" name="jednostka_nazwa">
                <label>Broń</label>
                <input type="text" name="bron">
                <label>Amunicja</label>
                <input type="text" name="amunicja">
                <label>Paliwo</label>
                <input type="text" name="paliwo">
                <label>Medykamenty</label>
                <input type="text" name="meds">
                <label>Sprzęt Logiczny</label>
                <input type="text" name="sprz_logi">
                <input type="submit" value="Dodaj">
            </form>
            
        </div>
        
        <div class="forms-row">
            
            <form action="zasoby_monitoruj.php" method="get" class="full-width">
            <h2>Monitoruj Zasoby</h2>
            <label>ID jednostki:</label>
            <input type="number" name="id">
            <input type="submit" value="Monitoruj">
        </form>
            </form>
        </div>
        
       
    </div>
</body>
</html>
