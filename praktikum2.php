<?php
function luas_lingkaran ($jari){
    return 3.14 * $jari * $jari;
}
function keliling_lingkaran ($jari){
    return 3.14 * (2 * $jari);
}
$r = 10;
echo "Luas lingkaran dengan jari-jari $r = ";
echo luas_lingkaran($r);

echo "<br>Keliling lingkaran dengan jari-jari $r = ";
echo keliling_lingkaran($r);
?>