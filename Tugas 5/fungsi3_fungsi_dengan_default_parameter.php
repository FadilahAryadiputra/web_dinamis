<?php
    // membuat fungsi/func dengan parameter
    function perkenalan($salam, $nama){
        echo $salam." <br>";
        echo "Selamat datang di channel ".$nama."<br>";
        echo "Jangan lupa like, komen, dan subscribe ya <br>";
        echo "<hr>";
    }

    // memanggil fungsi dengan parameter
    perkenalan("Assalamualaikum","Fadilah Aryadiputra");

    $salam = "Selamat Pagi";
    $nama = "Polines Official";
    perkenalan($salam, $nama);
?>