<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, jS d F Y");

// Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlau sejak 1 Januari 1970
    // echo time();
    // echo date('l', time()+60*60*24*99);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date ("l",mktime(0,0,0,1,22,2003))

    //strtotime
    // echo date ("l", strtotime("22 jan 2003"));

    // string
    // echo strlen("Rahadian") --> untuk menghitung panjang string
    // echo strcmp("a","b"); --> membandingkan dua buah string
    // print_r(explode("-","Moch-Rahadian-Amantjik",3)); --> memecah string menjadi array

$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

    // --> mencegah dari hacker

    // utility
    // var_dump() --> untuk mencetak isi dari sebuah variable
    // isset() --> apakah variabel udah pernah dibuat atau belum
    // empty() --> apakah variabelnya kosong atau tidak
    // die() --> memberhentikan program
    // sleep() --> berhenti sejenak
?>