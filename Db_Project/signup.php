
<?php include("baglan.php")?>
<meta charset ="UTF-8">
<html>
<head>
<meta charset = "UTF-8">
<title>Ayas Web Kullanici girisi</title>
<link href="girisekrani.css" type="text/css" rel="stylesheet"/>
</head>

<body>


<form method = "POST" action="signup.php"  >

 <div class="container"> 
        <div class="banner"><div class="textortaya">Ayas's Garage</div></center></div>
        <table border = "1" align = "center">
        <tr>
           <td>Name</td>
           <td><input type="text" name ="name"></td>
       </tr>
       <tr>
           <td>Surname</td>
           <td><input type="text" name ="surname"></td>
       </tr>
       <tr>
           <td>Age</td>
           <td><input type="integer" name ="age"></td>
       </tr>
       <tr>
           <td>City</td>
           <td><input type="text" name ="city"></td>
       </tr>
       <tr>
           <td>Submit</td>
           <td><input type="submit" name ="submit"></td>
       </tr>
       
    </table>
    </form>
    <div class="footer"></div>
    </div>

</body> 
</html>

<?php
$E_name = $_POST['name'];
$E_surname = $_POST['surname'];
$E_age = $_POST['age'];
$E_city = $_POST['city'];

$sql = "insert into Employee(E_age,E_city,E_name,E_surname) Values ('$E_age','$E_city','$E_name','$E_surname')";

if(mysqli_query($con,$sql))
{echo "New record created";}
else
{echo "New record NOT created";}

/*
<form action="" method = "POST">

        <div class="sol2"><div class="textortaya"><input type = "text" name = "name">Name</div></div>
        <div class="sol2"><div class="textortaya"><input type = "text" name = "surname">Surname<br><br></div></div>
        <div class="sol2"><div class="textortaya"><input type = "text" name = "age">Age</div></div>
        <div class="sol2"><div class="textortaya"><input type = "text" name = "city">City<br><br></div></div>  

        <div class="sol2"><div class="textortaya"><input type = "Submit" name = "submit"></div></div>
        
        <div class="sol2"><div class="textortaya"><a href="index.php"><button type="button">Baglana don</button></a></div></div>
      



<tr>
           <td>Name</td>
           <td><input type="text" name ="E_name"></td>

       </tr>

$E_name = $_POST['E_name'];
$E_surname = $_POST['E_surname'];
$E_age = $_POST['E_age'];
$E_city = $_POST['E_city'];
*/

?>


