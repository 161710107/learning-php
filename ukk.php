<!DOCTYPE html>
<html>
<head>
	<title>ukk</title>
</head>
<body background="h.png">
<form action="" method="POST" name="input">
<center>
<font color="red"><h1>Nama</font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="nama">
<br>
<font color="red">Kelas</font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="kelas">
<br>
<font color="red">Nilai Matematika</font>:<input type="number" name="nM">
<br>
<font color="red">Nilai B.Indonesia</font> :<input type="number" name="nBS">
<br>
<font color="red">Nilai B.Inggris</font> &nbsp&nbsp&nbsp&nbsp:<input type="number" name="nBG">
<br>
<font color="red">Nilai PAI</font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="number" name="nP">
<br>
<font color="red">Nilai Produktif</font> &nbsp&nbsp&nbsp&nbsp:<input type="number" name="nPR">
<br>
<input type="submit" name="input" value="input">
<input type="reset" name="reset" value="reset">

<?php
if (isset($_POST['input'])){
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$NM=$_POST['nM'];
	$NBN=$_POST['nBS'];
	$NBG=$_POST['nBG'];
	$NP=$_POST['nP'];
	$NPR=$_POST['nPR'];
	$jumlah=$NM+$NBN+$NBG+$NP+$NPR;
	$rata=$jumlah/5;
	{
		if($rata>100){
			$grade="Error";
		}
		else if($NM>100){
			$grade="Error";
		}
		else if($NBN>100){
			$grade="Error";
		}
		else if($NBG>100){
			$grade="Error";
		}
		else if($NP>100){
			$grade="Error";
		}
		else if($NPR>100){
			$grade="Error";
		}
		else if($rata>=90){
			$grade="A";
		}
		else if($rata>=80){
			$grade="B";
		}
		else if($rata>=70){
			$grade="C";
		}
		else if($rata>=50){
			$grade="D";
		}
		else if($rata<50){
			$grade="E";
		}
		else if($rata<0){
			$grade="Error";
		}	
		else if($NM<0){
			$grade="Error";
		}
		else if($NBN<0){
			$grade="Error";
		}
		else if($NBG<0){
			$grade="Error";
		}
		else if($NP<0){
			$grade="Error";
		}
		else if($NPR<0){
			$grade="Error";
		}
	}
	echo "<table border>
	<th>Nama</th>
	<th>Kelas</th>
	<th>MTK</th>
	<th>B.Indonesia</th>
	<th>B.Inggris</th>
	<th>PAI</th>
	<th>Produktif</th>
	<th>Rata</th>
	<th>Grade</th>

	<tr>
	<td>$nama</td>
	<td>$kelas</td>
	<td>$NM</td>
	<td>$NBN</td>
	<td>$NBG</td>
	<td>$NP</td>
	<td>$NPR</td>
	<td>$rata</td>
	<td>$grade</td>
	</tr>
	</table>";
}
?>
</center>
</form>
</body>
</html>