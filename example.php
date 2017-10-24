<!DOCTYPE html>
<html>
<head>
	<title>Lesson</title>
</head>
<body>
    <form action="" method="POST">
    	<table>
    		<tr>
    			<td>Nilai Petama</td><td>:</td><td><input type="text" name="Nilai1"></td>
    		</tr>
    		<tr>
    			<td>Nilai Kedua</td><td>:</td><td><input type="text" name="Nilai2"></td>
    		</tr>
    		<tr>
    			<td><input type="submit" name="submit" value="Submit"></td><td>&nbsp</td><td>&nbsp</td>
    		</tr>
    	</table>
    	<?php
    		//Fungsi if untuk pengulangan sedangkan $_POST deklarasi dari method form action
            if (isset($_POST['submit'])) {
            	$Nilaip = $_POST['Nilai1'];
            	$Nilais = $_POST['Nilai2'];
            	$jumlah =$Nilaip + $Nilais;
            	$rata =$jumlah / 2;
            	{
            		if ($rata < 75) {//Pengulangan 
            			$Status="Tidak tuntas";
            		}
            		elseif ($rata >= 75) {//pengulangan
            			$Status="Tuntas";
            		}
            	}
            	//Output Dari fungsi
            	echo "Nilai Pertama =".$Nilaip."";
            	echo "<br>";
            	echo "Nilai Kedua =".$Nilais."";
            	echo "<br>";
            	echo "Rata rata =".$rata."";
            	echo "<br>";
            	echo "Status =".$Status."";
            }
    	?>
    </form>
</body>
</html>