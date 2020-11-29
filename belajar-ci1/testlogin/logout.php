<?php
    session_start();

    session_unset(); //hapus semua var session
    session_destroy(); //hancurkan session

    //hancurkan cookie
    setCookie("cookietoken","", time() -3600);
    include 'cekautentikasi.php';

?>