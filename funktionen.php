<?php

function kugelVolumen($radius) {
    return (4/3) * M_PI * pow($radius, 3);
}


function kugelOberflaeche($radius) {
    return 4 * M_PI * pow($radius, 2);
}
?>
