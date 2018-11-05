<?php


       if($_SERVER["REQUEST_METHOD"] == "POST"){ 
           
           
            if(isset($_POST['tinh'])){
                
                $a = $_POST['a'];
                $b = $_POST['b'];
       
                if($a == 0){
                   
                     $kq ='Phương trình vô nghiệm';
                }
                
                else{
                    $kq ='Phương trình có nghiệm là : '. (-$b/$a);
                }

            }
         } 
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bậc 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="index_php.css">
</head>
<body>
	<?php include 'index.php';?>
	<div class="col-md-5" style="border: 1px solid black; padding: 20px 128px;">
		<h2>Giải phương trình bậc 1</h2>
		<form action="#" method="post" accept-charset="utf-8">
			Nhập a: <input type="text" name="a"><br><br>
            Nhập b: <input type="text" name="b"><br><br>
            
            <input type="submit" value="Tinh" name="tinh"><br>		
		</form>
		<?php
            if(isset($_POST['tinh'])){
                 echo $kq;
            }
           
         ?>
	</div>
</body>
</html>