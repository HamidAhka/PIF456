<!DOCTYPE html
	PUBLIC "-//W#C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/tr/chtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Halaman Administrator</title>
        <style type="text/css">
        .inner {
                margin: 200px auto;
                padding: 20px;
                width: 240px;
                border: 1px solid #333;
        }
        </style>
</head>
<body>
        <?php
                ini_set('display_errors', 1);
                define('_VALID', 1);

                // include file eksternal
                require_once('./Latihan3_auth.php');

                init_login();
                validate();
        ?>

        <h3>Simulasi Halaman Admin</h3>
        <p>
                <a href="?m=logout">Logout</a>
        </p>
        <p>Menu-menu admin ada di sini</p>
    </body>
</html>
