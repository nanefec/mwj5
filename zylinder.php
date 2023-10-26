<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Zylinderberechnung</title>
</head>
<body>
    <h1>Zylinderberechnung</h1>
    
    <form method="post" action="">
        Radius: <input type="text" name="radius"><br>
        Höhe: <input type="text" name="hoehe"><br>
        <input type="submit" name="submit" value="Berechnen">
    </form>

    <?php
    // Formularverarbeitung
    if (isset($_POST['submit'])) {
        $radius = floatval($_POST['radius']);
        $hoehe = floatval($_POST['hoehe']);
        
        if ($radius > 0 && $hoehe > 0) {
            // Einbinden der Berechnungsfunktionen aus funktion.php
            include('funktionen.php');
            
            $volumen = zylinderVolumen($radius, $hoehe);
            $oberflaeche = zylinderOberflaeche($radius, $hoehe);
            $lateralflaeche = zylinderLateralflaeche($radius, $hoehe);
            
            echo "<h2>Ergebnisse</h2>";
            echo "<p>Radius: $radius</p>";
            echo "<p>Höhe: $hoehe</p>";
            echo "<p>Volumen: $volumen</p>";
            echo "<p>Oberfläche: $oberflaeche</p>";
            echo "<p>Lateralfläche: $lateralflaeche</p>";
        } else {
            echo "<p style='color: red;'>Der Radius und die Höhe müssen größer als 0 sein.</p>";
        }
    }
    ?>
	
	<a href="index.php"><button>Zurück zur Startseite</button></a>
</body>
</html>
