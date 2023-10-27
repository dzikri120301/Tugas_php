<?php
@$nilai1 = $_POST['nilai1'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nilai Grade</title>
    </head>
    <body>
 <center><h3> MASUKKAN NILAI!!!</h3></center>
        <form method="POST">
   <table width="450" border="1" align="center">
  
      <td><strong>masukkan nilai </strong></td>
      <td><input name="nilai1" type="text" value ="<?php echo $nilai1; ?>"/></br></td> 
      <td><center> <input type="submit" name="submit" value="SUBMIT"/><br/></td></center>
  </table>
  <table width="450" border="1" align="center" >
            <td><center><?php
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 50 && $nilai1 <= 70) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = D. ';
            } else if ($nilai1 >= 60 && $nilai1 <= 80) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = C.  ';
            } else if ($nilai1 >= 70 && $nilai1 <= 90) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = B. ';
            } else if ($nilai1 >= 80 && $nilai1 <= 100) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = A.  ';
            } 
   
   else{
                echo 'Nilai : ' . $nilai1 . ' Silahkan masukan nilai.';
            }
          ?> </td></center> 
        </form>
  </table>
    </body>
</html>