<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        echo "Genap<br>";
        for ($i=1; $i <=10 ; $i++) { 
       	    if ($i % 2==0) {
       	    	echo "$i <br>";
       	    }
        }
        echo"Ganjil<br>";
        for ($i=1; $i <=10 ; $i++) { 
       	    if ($i % 2==1) {
       	    	echo "$i <br>";
       	    }
        }
    ?>
</body>
</html>