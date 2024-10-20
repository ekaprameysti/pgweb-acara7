<!DOCTYPE html>
<html>
<body>

<?php
$number = array("NOMOR", "1", "2", "3", "4", "5");
$merk = array("MERK HP", "IPhone", "Samsung", "Vivo", "Realme", "Nokia"); 
$colors = array("COLORS", "White", "  Black", "Gold", "Pink", "Grey");


echo "<table border='1'>";
for($i=0; $i<=5; $i++) {
echo "<tr><td> $number[$i] </td><td> $merk[$i] </td><td> $colors[$i] </td></tr>";
}
echo "</table>";
?>

</body>
</html>