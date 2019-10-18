
<?php include("baglan.php")?>

<html>
<title>Delete User</title>
<head>
    <meta charset ="UTF-8">
    <link href="deleteuser.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<form method = "POST" action="deleteuser.php"  >
    <!--User-->
    <div class="container">
            <div class="banner">Delete User</div>

            <div class="container2">

                    <a href="index.php" class="menuboxx">Main Page</a>
                   
            </div>

            <div class="container3">

                    <div class="box">Name</div>
                    <input type="text" class="textarea" name ="Name" placeholder="Name" value="" /> 
                    
                    <div class="box">Surname</div>
                    <input type="text" class="textarea" name ="Surname"  placeholder="Surname" value="" /> 

                    <div class="box">Username</div>
                    <input type="text" class="textarea" name ="Username"  placeholder="User Name" value="" /> 
                    
                    <div class="container4">
                    <div class="box2"><div class="submit"><input type="submit" name ="deleteuserbutton" Value ="Delete"></div></div>
                    <a href="admininterface.php" class="boxx">Admin Panel</a>
                    </div>
            </div>

            <div class="footer">Footer</div>
    </div>
    </form>

</body>
<!--    
        delete , name surname username
-->




<?php

$delete = false;

if (isset($_POST['deleteuserbutton']))
{
    $delete = false;
    $U_name = $_POST['Name'];
    $U_surname = $_POST['Surname'];
    $U_username = $_POST['Username'];
  
   
    if($U_name == "" | $U_surname == "" | $U_username == "")
    {
        $delete = false;
        $message = "Please fill spaces";
        echo "<script type='text/javascript'>alert('$message');</script>";  
        
    }
    else
    {
        $delete = true;
    }

#}

if($delete == true)
{
    $sql = "DELETE FROM User WHERE U_name = '$U_name' AND U_surname = '$U_surname' And U_username = '$U_username'";

    $result = mysqli_query($con, "SELECT COUNT(*) AS count FROM User");
    $row = mysqli_fetch_array($result);
    $count = $row['count'];


    if(mysqli_query($con,$sql))
    {  
           
        $message = "Deleting..";
        echo "<script type='text/javascript'>alert('$message');</script>";        
    }
    else
    {
         
        printf($U_name."\t".$U_surname."\t".$U_username."\n");
        $message = "User Not Deleted Error \n".$U_name."\t".$U_surname."\t".$U_username."\n";
        echo "<script type='text/javascript'>alert('$message');</script>";       
  
    }

      
    $result2 = mysqli_query($con, "SELECT COUNT(*) AS count2 FROM User");
    $row2 = mysqli_fetch_array($result2);
    $count2 = $row2['count2'];

    if($count > $count2)
    {
        $message = "Deleted";
        echo "<script type='text/javascript'>alert('$message');</script>";    
    }
    else
    {
        $message = "Error Not Deleted";
        echo "<script type='text/javascript'>alert('$message');</script>"; 
        die('<script type="text/javascript">window.location=\''.$url.'\';</script>');   
    }

}
else
{
   echo($delete);
}

}#

?>


<!--
DELETE FROM `User` WHERE U_name = 'A' AND U_surname = 'B' AND U_surname = 'C1';

if(is_null($_POST['Name']))
{
    $U_name = "";
}
else
{
    $U_name = $_POST['Name'];
}

if(!isset($$U_name)) $$U_name="";
if($U_name=="")
{
    echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";

}
else
{
    echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
}


 if($_GET['Password'] == $_GET['RPassword'])
    {
    $U_name = $_POST['Name'];
    $U_surname = $_POST['Surname'];
    $U_username = $_POST['Username'];
    $U_email = $_POST['Email'];
    $U_password = $_POST['Password'];
    printf($U_name."\t".$U_surname."\t".$U_username."\t".$U_email."\t".$$U_password ."\n");


    $sql = "insert into User(U_name,U_surname,U_username,U_email,U_password) Values ('$U_name','$U_surname','$U_username','$U_email','$U_password')";

    if(mysqli_query($con,$sql))
    {echo "New record created";}
    else
    {echo "New record NOT created";}

    }
    else
    {
        print("password are different");
    }
empty($U_name & $U_surname & $U_username & $U_email & $U_password )
if(is_null($_GET['Name'] & $_GET['Surname'] & $_GET['Username'] & $_GET['Email'] & $_GET['Password'] & $_GET['RPassword']))
{
    print("Please fill every blank, there is null value");
}
else



-->
<!-- .button {
  display: block;
}

div class="backmainpage"><a href="maininterface.html"><button type="button">Main Page</button></a></div>
                   

    <div class="usernametextarea"><input type="text" name ="username"></div>
     <div class="emailtextarea"><input type="text" name ="email"></div>
      
                    <div class="email">email</div>
                    <div class="emailtextarea"><input type="text" name ="email"></div>
                    <div class="password">Password</div>
                    <div class="passwordtextarea"><input type="text" name ="password"></div>
                    <div class="rpassword">RPassword</div>
                    <div class="rpasswordtextarea"><input type="text" name ="password2"></div>
                    <div class="signinbutton"><input type="submit" name ="signinbutton"></div>
                    <div class="forgetpasswordbutton"><a href="maininterface.html"><button type="button">Main Screen</button></a></div>

<input type="text"class="inputs" placeholder="e-mail" /> 
<br> 
 <input type="password" class="inputs"placeholder="Password" /> 
    
-->
</html>