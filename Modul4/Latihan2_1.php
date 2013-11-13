<!DOCTYPE html
	PUBLIC "-//W#C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/tr/chtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Menciptakan Database</title>
    </head>
    <body>
        <?php
        require_once './Koneksi.php';
        
        $db = 'myweb';
        
        $res = mysql_query('CREATE DATABASE '.$db);
        if($res){
            echo "Database ".$db." Created";
            mysql_close();
        } else {
            echo mysql_error();
        }
        
        ?>
    </body>
</html>
