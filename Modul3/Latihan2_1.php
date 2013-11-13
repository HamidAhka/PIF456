<!DOCTYPE html
	PUBLIC "-//W#C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/tr/chtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Set Session (Latihan 2-1)</title>
    </head>
    <body>
        <?php
        // Inisialisasi data session
                session_start();

                // Set session jika belum ada 
                if(!isset($_SESSION['test'])){
                        $_SESSION['test'] = 'value';
                }else{
                        echo 'Session di-set <br />';

                        // Mencetak nilai session test
                        echo 'Nilai: ' . $_SESSION['test'] . '<br />';

                        // Mencetak semua elemen session
                        print_r($_SESSION);
                } 
        ?>
    </body>
</html>
