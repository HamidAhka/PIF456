<!DOCTYPE html
	PUBLIC "-//W#C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/tr/chtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Set Cookie (Latihan 1-1)</title>
    </head>
    <body>
        <?php
        // Men set nilai cookie
        setcookie('nama_cookie', 'nilai_cookie');
        
        //mendapatkan nilai cookie
        echo $_COOKIE['nama_cookie'];
        ?>
        <p>Tekan Refresh (F5)</p>
    </body>
</html>
