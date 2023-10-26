<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kugelberechnung</title>
</head>
<body>
    <h1>Kugelberechnung</h1>
    
    <form method="post" action="">
        Radius: <input type="text" name="radius"><br>
        <input type="submit" name="submit" value="Berechnen">
    </form>

    <?php
    
    if (isset($_POST['submit'])) {
        $radius = floatval($_POST['radius']);
        
        if ($radius > 0) {
            // Einbinden der Berechnungsfunktionen aus funktion.php
            include('funktionen.php');
            
            $volumen = kugelVolumen($radius);
            $oberflaeche = kugelOberflaeche($radius);
            
            echo "<p>Radius: $radius</p>";
            echo "<p>Volumen: $volumen</p>";
            echo "<p>Oberfläche: $oberflaeche</p>";
        } else {
            echo "<p>Der Radius muss größer als 0 sein.</p>";
        }
    }
    ?>
	
	<a href="index.php"><button>Zurück zur Startseite</button></a>
</body>
</html>




