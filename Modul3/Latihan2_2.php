<!DOCTYPE html
	PUBLIC "-//W#C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/tr/chtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Hapus Session (Latihan 2 - 2)</title>
    </head>
    <body>
        <?php
         // Inisialisasi data session
                session_start();

                // Set session jika belum ada
                if (isset($_SESSION['test'])){

                        // Hapus session test
                        unset($_SESSION['test']);
                        echo 'session dihapus';
                }else{
                        echo 'unset<br />';

                        // Mencetak semua elemen session
                        print_r($_SESSION);
                }
        ?>
    </body>
</html>
