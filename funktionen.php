<?php

function kugelVolumen($radius) {
    return (4/3) * M_PI * pow($radius, 3);
}


function kugelOberflaeche($radius) {
    return 4 * M_PI * pow($radius, 2);
}
?>

<?php

function wuerfelVolumen($seitenlaenge) {
    return pow($seitenlaenge, 3);
}


function wuerfelMantelflaeche($seitenlaenge) {
    return 6 * pow($seitenlaenge, 2);
}


function wuerfelOberflaecheninhalt($seitenlaenge) {
    return 6 * pow($seitenlaenge, 2);
}
?>

<?php
// PHP-Funktion zur Berechnung des Volumens eines Zylinders
function zylinderVolumen($radius, $hoehe) {
    return M_PI * pow($radius, 2) * $hoehe;
}

// PHP-Funktion zur Berechnung der Oberfläche eines Zylinders
function zylinderOberflaeche($radius, $hoehe) {
    $mantelflaeche = (2 * M_PI * $radius * $hoehe);
    $oberflaeche = (2 * M_PI * pow($radius, 2) + $mantelflaeche);
    return $oberflaeche;
}

// PHP-Funktion zur Berechnung der Lateralflaeche eines Zylinders
function zylinderLateralflaeche($radius, $hoehe) {
    return 2 * M_PI * $radius * $hoehe;
}
?>
