<!DOCTYPE html>
<html>
<body>

<?php
$bulan = array("Januari"=>"1", "Februari"=>"2", "Maret"=>"3", "April"=>"4", "Mei"=>"5", "Juni"=>"6", "Juli"=>"7", "Agustus"=>"8", "September"=>"9", "Oktober"=>"10", "November"=>"11", "Desember"=>"12");

foreach($bulan as $x => $val) {
  echo "Bulan $val adalah $x<br>";
}
?>

</body>
</html>