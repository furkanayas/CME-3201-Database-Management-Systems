
<?php include("baglan.php")?>
<meta charset ="UTF-8">
<html>
<head>
<meta charset = "UTF-8">
<title>Ayas Web Kullanici girisi</title>
<link href="userlogin.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<form action="" method = "POST">






 <div class="container"> 
        <div class="banner">Ayas's Garage</div>
        <div class="container2">
        <a href="index.php" class="menuboxx">Main Page</a>
        </div>

        <div class="container3">

        <div class="box">Username</div>
        <input type="text" class="textarea" name ="username" placeholder="Username" value="" /> 
                    
        <div class="box">Password</div>
        <input type="text" class="textarea" name ="password"  placeholder="Surname" value="" /> 

    

        <div class="container4">
                <input type="submit" class="submit" name="girisyap">
                <a href="index.php" class="boxx">Main Page</a>

                </div>
        </div>
    
      
        

    <div class="footer"></div>
</div>

</form>
</body> 
</html>

<?php
if($_POST)
{
$sorgu = mysqli_query($con,"SELECT * FROM User Where U_username ='$_POST[username]' and U_password = '$_POST[password]'");
$varmi = mysqli_num_rows($sorgu);
$x = 3;
if($varmi >= 1)
{
 echo"kullanici girisi yapıldi";
 $x = 1;
}
else
{
 echo'kullanici bilgileri eslesmedi';
 $x = 0;
}
}

?>


