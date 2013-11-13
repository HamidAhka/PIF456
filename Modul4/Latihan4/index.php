<!DOCTYPE html
	PUBLIC "-//W#C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/tr/chtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Akses dan Manipulasi Data</title>
        <style>
            .even{background: #ddd;}            
        </style>            
    </head>
    
    <body>
        <?php
        ini_set('display_errors', 1);
        
        require_once './Koneksi.php';
        require_once './data_handler.php';
        
        define('MHS', 'mahasiswa');
        
        data_handler('?m=data');
        ?>
    </body>
</html>
