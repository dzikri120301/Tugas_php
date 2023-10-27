<html>
    <head>
        <title>Index Masa Tubuh</title>
    </head>
    <body>
        <h1>Menghitung Index Masa Tubuh</h1>
        <form method="POST" action="">
            Tinggi Badan :
            <br>
            <input type="number" name="tinggi"> - CM<br>
            Berat Badan :
            <br>
            <input type="number" name="berat"><br>
            <input type="submit" name="hitung" value="Hitung">
        </form>
        <?php 
        if(isset($_POST['hitung'])){
            echo "Tinggi Badan Anda : ".$_POST['tinggi']."<br>";
            echo "Berat Badan Anda : ".$_POST['berat']."<br>";
            $tinggi = $_POST['tinggi']/100; 
            $tinggi_rumus = $tinggi*$tinggi;
            $hasil_tinggi = number_format($tinggi_rumus, 2, '.', '');
            $hasil = $_POST['berat']/$hasil_tinggi;
            $hasil_ahir = number_format($hasil,1, '.', '');
            echo "<b>";
            if($hasil_ahir < 17){
                echo "Kurus";
            }else if(($hasil_ahir >= 18.5) && ($hasil_ahir <= 25)){
                echo "Kurus";
            }else if(($hasil_ahir > 25) && ($hasil_ahir <=30)){
                echo "Normal";
            }else if(($hasil_ahir >= 27) && ($hasil_ahir <=30)){
                echo "Gemuk";
            }else{
                echo "Gemuk";
            }
            echo "</b>";
        }
        ?>
    </body>
</html>