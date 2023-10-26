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
