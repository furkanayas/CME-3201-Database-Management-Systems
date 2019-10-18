
<?php include("baglan.php")?>

<html>
<title>Sign Up Screen</title>
<head>
    <meta charset ="UTF-8">
    <link href="contact.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<form method = "POST" action="signinterface.php"  >
    <!--User-->
    <div class="container">
            <div class="banner">Ayas's Garage</div>

            <div class="container2">
                    <a href="index.php" class="menuboxx">Main Page</a>        
            </div>

            <div class="container3">
                <div class="box">Phone</div>
                <div class="box">E-Mail</div>
            </div>
            <div class="container4">
                <div class="textarea">500 000 00 00</div>
                <div class="textarea">furkan.ayas@ceng.deu.edu.tr</div>
            </div>


            <div class="footer">Footer</div>
    </div>
    </form>

</body>

<!-- -->


<?php
$add = false;
if (isset($_POST['signinbutton']))
{
    $U_name = $_POST['Name'];
    $U_surname = $_POST['Surname'];
    $U_username = $_POST['Username'];
    $U_email = $_POST['Email'];
    $U_password = $_POST['Password'];
    $U_rpassword = $_POST['RPassword'];
    if($U_name == "" | $U_surname == "" | $U_username == "" | $U_email == "" | $U_password == "" | $U_rpassword == "")
    {
        $add = false;
        $message = "Please fill ALL the spaces";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
       
        if($U_password != $U_rpassword)
        {
        $add = false;
        $message = "Password are not same";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
        {
            $add = true;
        }
    }

    
}


if($add == true)
{
    $sql = "insert into User(U_name,U_surname,U_username,U_email,U_password) Values ('$U_name','$U_surname','$U_username','$U_email','$U_password')";

    if(mysqli_query($con,$sql))
    {
        $message = "New record created";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
        $message = "New record NOT created";
        echo "<script type='text/javascript'>alert('$message');</script>";
        die('<script type="text/javascript">window.location=\''.$url.'\';</script>');
    }
}

?>


<!--
 <div class="box2"><div class="signinbutton"><input type="submit" name ="signinbutton">Name</div></div>
                    <div class="box2"><div class="forgetpasswordbutton"><a href="index.php"><button type="button">Main Screen</button></a></div></div>
           

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