<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
			<title>Tugas Praktikum Modul 5</title>
	</head>
	<body>
		<table border="1" width="500px">
		<?php
			require "koneksi.php";
			$query1 = "SELECT * FROM mahasiswa ORDER BY nim ";
			$urutkan = 'asc';
			$urutkanbaru = 'asc';
			if(isset($_GET['orderby'])){
				$orderby=$_GET['orderby'];
				$urutkan=$_GET['urutkan'];
									
				$query1="SELECT * FROM  mahasiswa order by $orderby $urutkan ";
				if($urutkan=='asc'){
					$urutkanbaru='desc';                                        
				}else{
					$urutkanbaru='asc';
				}
			}
		?>
		<th>
			<td><a href='tugas.php?orderby=nim&urutkan=<?=$urutkanbaru;?>'>Nim</a></td>
			<td><a href='tugas.php?orderby=nama&urutkan=<?=$urutkanbaru;?>'>Nama</a></td>
			<td><a href='tugas.php?orderby=alamat&urutkan=<?=$urutkanbaru;?>'>Alamat</a></td>
		</th>
															
		<?php
			$result = mysql_query($query1) or die (mysql_error());
			$no = 1; 
			while($rows=mysql_fetch_object($result)){
		?>

			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $rows -> nim;?></td>
				<td><?php echo $rows -> nama;?></td>
				<td><?php echo $rows -> alamat;?></td>
			</tr>
					
		<?php
				$no++;
			}
		?>

			</table>
	</body>
</html>
