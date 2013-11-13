<!DOCTYPE html
	PUBLIC "-//W#C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/tr/chtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cek Dukungan Cookie (Latihan 1-2)</title>
    </head>
    <body>
        <?php
          if(isset($_GET['q']) && $_GET['q'] == 1){
                        if(isset($_COOKIE['test'])){ 
                                echo 'support'; 
                        }else{
                                echo 'tidak support';
                        } 
                }else{
                        setcookie('test', 'value');
                        $self = $_SERVER['PHP_SELF'];

                        // Redireksi ke current script
                        header('Location: ' . $self . '?q=1');
                        exit;
                }
        ?>
    </body>
</html>
