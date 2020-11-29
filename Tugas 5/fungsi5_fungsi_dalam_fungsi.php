<?php
    // membuat fungsi hitungUmur
    function hitungUmur($tgl_lahir){
        $umur = date('Y') - $tgl_lahir;
        return $umur;
    }

    function perkenalan($channel, $salam="Assalamualaikum"){
        echo $salam. "<br>";
        echo "Selamat Datang di channel ".$channel."<br>";
        // memanggil fungsi lain
        echo "Sekarang youtuber berusia ".hitungUmur(2001)." tahun<br>";
        echo "Nice to meet you :)";
    }

    // emmanggil fungsi perkenalan
    perkenalan("Fadilah Aryadiputra");