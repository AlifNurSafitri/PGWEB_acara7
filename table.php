<!DOCTYPE html>
<html>
<body>

<?php
$boyfriend = array("Kenyu", "Kento", "Koushi");  
$flag = array("green", "emerald", "light green");

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Boyfriend</th><th>Flag</th></tr>";  // Baris judul

for ($i = 0; $i < count($boyfriend); $i++) {
    echo "<tr><td>" . $boyfriend[$i] . "</td><td>" . $flag[$i] . "</td></tr>";
}
echo "</table>";
?>

</body>
</html>