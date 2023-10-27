<?php
  echo "Luas Persegi";
  echo "<hr>";
 
  $sisi = 6 ;
 
  $luas_persegi = $sisi * $sisi;
   
  echo "Panjang sisi persegi = $sisi <br>";
  echo "Luas persegi = ($sisi x $sisi) = $luas_persegi <br>";

  echo "<hr>";
  echo "Luas Persegi Pajang";
  echo "<hr>";

  $Panjang = 12 ;
  $Lebar   = 7 ;
 
  $luas_persegi_panjang = $Panjang * $Lebar ;
   
  echo "Panjang sisi persegi panjang = $Panjang <br>";
  echo "Lebar sisi persegi panjang = $Lebar <br>";
  echo "Luas persegi Panjang = ($Panjang x $Lebar) = $luas_persegi_panjang <br>";

  echo "<hr>";
  echo "Luas Jajar Genjang";
  echo "<hr>";

  $Alas = 10 ;
  $Tinggi   = 5 ;
 
  $luas_jajar_genjang = $Alas * $Tinggi ;
   
  echo "Alas sisi Jajar Genjang = $Alas <br>";
  echo "Tinggi sisi Jajar genjang = $Tinggi <br>";
  echo "Luas Jajar Genjang = ($Alas x $Tinggi) = $luas_jajar_genjang <br>";

  echo "<hr>";
  echo "Luas Segitiga";
  echo "<hr>";

  $Alas = 15 ;
  $Tinggi   = 5 ;
 
  $luas_segitiga = 1/2 * $Alas * $Tinggi ;
   
  echo "Alas sisi Segitiga = $Alas <br>";
  echo "Tinggi sisi Segitiga = $Tinggi <br>";
  echo "Luas Segitiga = 1/2 ($Alas x $Tinggi) = $luas_segitiga <br>";

  echo "<hr>";
  echo "Luas Belah Ketupat";
  echo "<hr>";

  $D1 = 9 ;
  $D2   = 5 ;
 
  $luas_belah_ketupat  = 1/2 * $D1 * $D2 ;
   
  echo "Diameter 1 = $D1 <br>";
  echo "Diameter 2 = $D2 <br>";
  echo "Luas Belah Ketupat = 1/2 * ($D1 x $D2 ) = $luas_belah_ketupat <br>";
?>