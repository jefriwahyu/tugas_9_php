<?php
// menyiapkan 2 angka awal
$aseb=0;
$asek=1;
  
// menampilkan 2 angka awal
echo "$aseb $asek";
 
for ($i=0; $i<20; $i++)
{
  // menghitung angka yang akan ditampilkan
  $output = $aseb + $asek;
  echo " $output";
  
  //menyiapkan angka untuk perhitungan berikutnya
  $aseb = $asek;
  $asek = $output;
}

?>