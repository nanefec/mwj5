<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Würfelberechnung</title>
</head>
<body>
    <h1>Würfelberechnung</h1>
    
    <form method="post" action="">
        Seitenlänge: <input type="text" name="seitenlaenge"><br>
        <input type="submit" name="submit" value="Berechnen">
    </form>

    <?php
    
    if (isset($_POST['submit'])) {
        $seitenlaenge = floatval($_POST['seitenlaenge']);
        
        if ($seitenlaenge > 0) {
            
            include('funktionen.php');
            
            $volumen = wuerfelVolumen($seitenlaenge);
            $mantelflaeche = wuerfelMantelflaeche($seitenlaenge);
            $oberflaecheninhalt = wuerfelOberflaecheninhalt($seitenlaenge);
            
            echo "<h2>Ergebnisse</h2>";
            echo "<p>Seitenlänge: $seitenlaenge</p>";
            echo "<p>Volumen: $volumen</p>";
            echo "<p>Mantelfläche: $mantelflaeche</p>";
            echo "<p>Oberflächeninhalt: $oberflaecheninhalt</p>";
        } else {
            echo "<p style='color: red;'>Die Seitenlänge muss größer als 0 sein.</p>";
        }
    }
    ?>
</body>
</html>
