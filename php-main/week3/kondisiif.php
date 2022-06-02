<?php
    /**
     * A11 = Teknik Informatika - S1
     * A12 = Sistem Informasi - S1
     * B11 = Manajemen - S1
     * B12 = Akuntansi - S1
     */
    $progdi = 'B11';

    if($progdi=='A11'){
        echo "Teknik Informatika - S1";
    }
    elseif($progdi=='B11'){
        echo "Manajemen - S1";
    }
    else{
        echo "Tidak ada progdi yang dimaksud";
    }
    
    $nilai = 76;
    if($nilai>76)
    {
        echo "Lulus";
    }
    else{
        echo "Gagal";
    }