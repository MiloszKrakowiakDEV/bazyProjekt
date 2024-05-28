<!DOCTYPE html>
<html>
<head>
    <title>Analiza Danych Wywiadowczych</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
</head>
<body>  
    <div id = "analiza_body"></div>
    <div class="container">
        
        <h1>Analiza Danych Wywiadowczych</h1>
        <p id="powrot"><a href="index.html">POWRÓT</a></p>
        <p id="powrot"><a href="analiza_wypisz.php">LISTA RAPORTÓW</a></p>
        <div class="forms-row">
            <form action="analiza_dodaj.php" method="post">
                <h2>Stwórz raport:</h2>
                <label>Nazwa:</label>
                <input type="text" name="nazwa">
                <label>Zagrożenia:</label>
                <input type="text" name="zagrozenia">
                <label>Ruch Wroga:</label>
                <input type="text" name="ruch_wroga">
                <label>Teren:</label>
                <input type="text" name="teren">
                <label>Warunki:</label>
                <input type="text" name="warunki">
                <label>Data:</label>
                <input type="text" name="data">
                <label>Status:</label>
                <input type="text" name="status">
                <label>Opis:</label>
                <textarea name="opis" rows="4" cols="50"></textarea>
                <input type="submit" value="Edytuj">
            </form>
            
            <form action="analiza_edytuj.php" method="post">
                <h2>Edytuj Raport:</h2>
                <label>ID:</label>
                <input type="number" name="id">
                <label>Nazwa:</label>
                <input type="text" name="nazwa">
                <label>Zagrożenia:</label>
                <input type="text" name="zagrozenia">
                <label>Ruch Wroga:</label>
                <input type="text" name="ruch_wroga">
                <label>Teren:</label>
                <input type="text" name="teren">
                <label>Warunki:</label>
                <input type="text" name="warunki">
                <label>Data:</label>
                <input type="text" name="data">
                <label>Status:</label>
                <input type="text" name="status">
                <label>Opis:</label>
                <textarea name="opis" rows="4" cols="50"></textarea>
                <input type="submit" value="Edytuj">
            </form>
        </div>
        
        <div class="forms-row">
            <form action="analiza_usun.php" method="post">
                <h2>Usuń Raport:</h2>
                <label>ID Raportu:</label>
                <input type="text" name="id">
                <input type="submit" value="Usuń">
            </form>
            
            <form action="przydziel_misje.php" method="post">
                <h2>-</h2>
                <label>-:</label>
                <input type="number" name="id_jednostki">
                <label>-</label>
                <input type="number" name="id_misji">
                <input type="submit" value="Przydziel">
            </form>
        </div>
        
        <form action="analiza_monitoruj.php" method="get" class="full-width">
            <h2>Monitoruj Raport</h2>
            <label>ID Raportu:</label>
            <input type="text" name="id">
            <input type="submit" value="Monitoruj">
        </form>
    </div>
</body>
</html>
