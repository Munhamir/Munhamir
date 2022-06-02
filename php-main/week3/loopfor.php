<?php

    /**
     * Looping dengan for digunakan jika kita sudah tau berapa kali loopingnya
     */
    $end = 11;
    $sum = 0;
    $genap = 0;
    $ganjil = 0;
     for($start=1;$start<=$end;$start++){
        echo $start,"<br/>";
        //tampilkan sum of $start
        $sum += $start;

        //tampilkan jumlah bilangan genap
        if($start % 2 == 0){
            $genap++;
        }
        else{
            //tampilkan jumlah bilangan ganjil
            $ganjil++;
        }
        

     }

     echo "Nilai akhir dari variabel start: ",$start,"<br/>";

     echo $sum;
     echo "<br> Jumlah bilangan ganjil",$ganjil;
     echo "<br> Jumlah bilangan genap",$genap;

     //1+2+3+4+5+6+7+8+9+10