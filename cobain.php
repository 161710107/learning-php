<!DOCTYPE html>
<html>
<head>
	<title>Doc Class</title>
</head>
<body>
    <form action="" method="POST">
    	Masukan Nilai : <input type="text" name="Mn">
    	<input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
    <?php 
        if (isset($_POST['submit'])) {
                $Masukan=$_POST['Mn'];
        {
            if ($Masukan > 100) {
                echo "Nilai tidak ada ";
            }
            elseif ($Masukan <= 74) {
                echo "Anda tidak lulus coba lagi tahun depan nilai anda ".$Masukan."";
            }
            elseif ($Masukan >= 75 && $Masukan <=100) {
                echo "Anda lulus tingkatkan pembelajaran anda nilai anda ".$Masukan."";
            }
        }
    }
    ?>