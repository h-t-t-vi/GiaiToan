 <?php


       if($_SERVER["REQUEST_METHOD"] == "POST"){ 
           
           
            if(isset($_POST['tinh'])){
                
                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];
                
                //echo $s;
                $t = ($b*$b) - (4 *$a *$c);
                if($t < 0){
                   
                     $kq ='Phương trình vô nghiệm';
                }
                else if($t == 0){
                    $kq = 'Phương trình có nghiệm kép là: '. (-$b/2*$a);
                }
                else{
                    $kq ='Phương trình có hai nghiệm là : '. (-$b + (sqrt($t)/2*$a)). ' va ' .  (-$b - (sqrt($t)/2*$a));
                }

            }
         } 
        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bậc 2</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="index_php.css">
        
    </head>
    
    <body>
        <?php include 'index.php';?>
        <div class="col-md-5" style="border: 1px solid black; padding: 20px 128px;">
        <h2>Giải phương trình bậc 2</h2>
        <form action="giai.php" method="POST">
            Nhập a: <input type="text" name="a"><br><br>
            Nhập b: <input type="text" name="b"><br><br>
            Nhập c: <input type="text" name="c"><br><br>
            <input type="submit" value="Tinh" name="tinh"><br>
        </form>
        <?php
            if(isset($t)){
                 echo $kq;
            }
           
         ?>
        </div>
       
    </body>
</html>
