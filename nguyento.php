
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nguyên tố</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="index_php.css">
</head>
<body>
	<?php include 'index.php';?>
	<div class="col-md-5" style="border: 1px solid black; padding: 72px 148px;">
	<h2>Tìm số nguyên tố</h2>
	<form action="nguyento.php" method="post" accept-charset="utf-8">
		Nhập số  : &nbsp;<input type="text" name="n" >
		<input type="submit" name="tinh" value="Tính">
	
	</form>
	<?php 
		$kq=1;
		
		if(isset($_POST['tinh']))
		{  
			$a=$_POST['n'];
			if($a<2) echo $a ." khong la so nguyen to";
		  	if($a==2) echo $a. " la so nguyen to";
		    for($i=2;$i<=sqrt($a);$i++)
		    {
		   		if($a%$i==0)
		   	{
		    $kq=0;
		    }
		    }
		    if($kq==1)
			{
			   echo $a . " la so nguyen to";
			}
			else
			{
			   echo $a . " khong la so nguyen to";
			}
		 }
	?>
	</div>
	
</body>
</html>