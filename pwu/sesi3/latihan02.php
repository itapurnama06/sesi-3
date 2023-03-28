<?php
   $nawal = 0;
   $nakhir = 10;
/*
   while($nawal < $nakhir){
       echo "Perulangan ke-".$nawal."<br>"; //perulangan akan berakhir jika bernilai false, jika true maka trus berulang
       $nawal++;  //nilai setiap perulangan akan di tambahkan 1 angka
   }

   echo "<hr>";
   
   $nawal = 0; // jika ini di hapus maka perulangan  10 aja kelihatan, karena perulangan terakhir
*/
   do{ //do while pengecekannya di akhir, knp muncul 10 dulu, karena masuk dulu baru di periksa, mininal dia melakukan perulangan 1 kali
      echo "Perulangan ke-".$nawal."<br>";
      $nawal++;
  }while($nawal < $nakhir);
  