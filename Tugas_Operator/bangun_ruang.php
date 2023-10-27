<?php 
    echo "<hr>";
    echo "Volume Balok";
    echo "<hr>";
  
    $panjang = 15 ;
    $lebar   = 5 ;
    $tinggi  = 3 ;
   
    $volume_balok = $panjang * $lebar * $tinggi ;
     
    echo "Panjang Balok = $panjang <br>";
    echo "Lebar Balok = $lebar <br>";
    echo "Tinggi Balok = $tinggi <br>";
    echo "Vokume Balok = ( $panjang * $lebar * $tinggi ) = $volume_balok <br>";

    echo "<hr>";
    echo "Volume Kubus";
    echo "<hr>";
  
    $r = 15 ;
    
    $volume_balok = $r * $r * $r ;
     
    echo "Jari-Jari Balok = $r <br>";
    echo "Vokume Balok = ( $r * $r * $r ) = $volume_balok <br>";

    echo "<hr>";
    echo "Volume Prisma";
    echo "<hr>";
  
    $luas_alas = 20 ;
    $tinggi   = 8 ;

    $volume_prisma = $luas_alas * $tinggi ;
     
    echo "Luas Alas Prisma = $luas_alas <br>";
    echo "Tinggi Prisma = $tinggi <br>";
    echo "Vokume Prisma = ( $luas_alas * $tinggi ) = $volume_prisma <br>";
?>