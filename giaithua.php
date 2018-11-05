<?php
	if(isset($_POST['gthua'])){
		$n = $_POST['n'];
		$x = 1;
		for ($i=1; $i < $n-1 ; $i++) { 
			 $x*=($i+1);   
		}
	    $gt ='Giai thừa của '.$n.' là : '.$x; 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giai Thừa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="index_php.css">
</head>
<body>
	<?php include 'index.php';?>
	<div class="col-md-5" style="border: 1px solid black; padding: 56px 84px;">
	<h2>Tính giai thừa</h2>
	<form action="giaithua.php" method="post" accept-charset="utf-8">
		Nhập số cần tính giai thừa : &nbsp;<input type="text" name="n" >
		<input type="submit" name="gthua" value="Tính">
	
	</form>
	<?php
		if(isset($_POST['gthua'])){
			echo $gt;
		}
		
	?>
	</div>
</body>
</html>