<!DOCTYPE html>
<html>
<head>
    <title>Analiza Danych Wywiadowczych</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/3411/3411458.png">
    <style>
#analiza_body {
    background-image: url('https://www.shutterstock.com/shutterstock/videos/3435672025/thumb/1.jpg?ip=x480');
    background-size: 100% 150%;
    background-repeat: no-repeat;
    height: 165%;
    width: 100%;
    filter: blur(5px);
    position: center;
    overflow: auto;
}

    </style>
</head>
<body>  
    <div id = "analiza_body"></div>
    <div class="container">
        
        <h1>Analiza Danych Wywiadowczych</h1>
        <p id="powrot"><a href="index.html">POWRÓT</a></p>
        <p id="powrot"><a href="analiza_wypisz.php">LISTA RAPORTÓW</a></p>
        <div class="forms-row">
            <form action="analiza_dodaj.php" method="post" class="full-width">
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
                <input type="date" name="data">
                <label>Opis:</label>
                <textarea name="opis" rows="4" cols="50"></textarea>
                <input type="submit" value="Stwórz">
            </form>
            
        </div>
        
        <div class="forms-row">
        <form action="analiza_monitoruj.php" method="get" class="full-width">
            <h2>Monitoruj Raport</h2>
            <label>ID Raportu:</label>
            <input type="text" name="id">
            <input type="submit" value="Monitoruj">
        </form>
    </div>
</body>
</html>
