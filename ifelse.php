<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");
echo "<p>Terdapat pesan yang belum anda baca " . $t; 
echo ", pesan tersebut ialah</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
 
</body>
</html>
