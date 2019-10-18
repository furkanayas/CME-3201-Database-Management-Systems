
<?php include("baglan.php")?>

<html>
<title>Admin Login Screen</title>
<head>
    <meta charset ="UTF-8">
    <link href="admininterfacelogin.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<form method = "POST" action="admininterfacelogin.php"  >
    <!--User-->

    <div class="container"> 
        <div class="banner"></div>
        <div class="container2">
        <a href="index.php" class="menuboxx">Main Page</a>
        </div>


        <div class="container3">

        <div class="box">Adminname</div>
        <input type="text" class="textarea" name ="Adminname" placeholder="Adminname" value="" /> 
                    
        <div class="box">Adminpassword</div>
        <input type="text" class="textarea" name ="Adminpassword"  placeholder="Adminpassword" value="" /> 
        <div class="container4">
        
                <input type="submit" class="submit" name="adminloginbutton" value ="Login">
                <a href="index.php" class="boxx">Main Page</a>

            </div>
        </div>
 

    <div class="footer"></div>
</div>



    </form>

</body>



<?php
if (isset($_POST['adminloginbutton']))
{
    $full = true;
    $A_name = $_POST['Adminname'];
    $A_password = $_POST['Adminpassword'];
    
    if($A_name == "")
    {   
        $message = "Please fill the name space \n";
        echo "<script type='text/javascript'>alert('$message');</script>";  
        $full = false;
    }
    
    if($A_password == "")
    {
        $message = "Please fill the password space \n";
        echo "<script type='text/javascript'>alert('$message');</script>";  
        $full = false;
    }
   
if($full == true)
{
    
    $sql = mysqli_query($con,"SELECT  * From Company");
    $admin = mysqli_fetch_array($sql);
    $companyname = $admin['C_name'];
    $name = $admin['A_name'];
    $password = $admin['A_password'];

   if($name == $A_name & $password == $A_password)
   {
    $url = "admininterface.php";
    $message = "Welcome the system";
    echo "<script type='text/javascript'>alert('$message');</script>";  
    die('<script type="text/javascript">window.location=\''.$url.'\';</script>'); 
   }
   else
   {
    $message = "Error";
    echo "<script type='text/javascript'>alert('$message');</script>";      
   }
  
}
else
{  
    $message = "Please fill all spaces";
    echo "<script type='text/javascript'>alert('$message');</script>";  
}

}
?>


<!--    
-->
</html>