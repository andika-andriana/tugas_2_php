<?php
$beli = 50000;
$jual = 80000;
$keuntungan = $jual-$beli;
$persentase = ($keuntungan/$beli)*100;

echo("
<p>
  Jual = $jual <br/>
  Beli = $beli <br/>
  Keuntungan = ? <br/>
  Jawaban: $persentase %
</p>
")

?>
