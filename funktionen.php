<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Funktionen</title>
</head>

<body>
	<?php
    // PHP-Funktion zur Berechnung des Volumens einer Kugel
    function kugelVolumen($radius) {
        return (4/3) * M_PI * pow($radius, 3);
    }

    // PHP-Funktion zur Berechnung der Oberfläche einer Kugel
    function kugelOberflaeche($radius) {
        return 4 * M_PI * pow($radius, 2);
    }

    // Formularverarbeitung
    if (isset($_POST['submit'])) {
        $radius = floatval($_POST['radius']);
        
        if ($radius > 0) {
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
</body>
</html>