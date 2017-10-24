<!DOCTYPE html>
<html>
<head>
	<title> Coba</title>
</head>
<body>
<form action="#" method="POST">
nama : <input type="text" name="nama">
kelas : <input type="text" name="kelas">
alamat : <input type="text" name="alamat">
<input type="submit" name="simpan" value="submit"></input>
</form>
</body>
</html>

<?php 
if (isset($_POST['simpan'] )) 
{
	$nama = $_POST['nama'];
	echo "nama = ".$nama."";
    echo "<br>";
}
{
	$kelas = $_POST['kelas'];
	echo "kelas = ".$kelas."";
    echo "<br>";
}
{
    $alamat = $_POST['alamat'];
	echo "alamat = ".$alamat."";
    echo "<br>";
}
?>
