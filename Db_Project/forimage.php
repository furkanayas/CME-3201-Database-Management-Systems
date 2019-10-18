
<?php include("baglan.php")?>

<html>
<head>
<meta charset = "UTF-8">
<link href="forimage.css" type="text/css" rel="stylesheet"/>
<title>Ayas Web Kullanici girisi</title>
</head>

<body>
        <form action="forimage.php" method="POST" enctype="multipart/form-data">

       
        <div class="container">
                <div class="banner">Banner</div>

                <div class="container2">
                        <div class="container3"><input type="file" name="image"><input type="submit" value="Upload Image" name ="yukle"></div>
                        <div class="container4"></div>
                </div>
                
        </div>
        </form>

</body>
</html>
<!--       
-->

<?php

if (isset($_POST['yukle']))
{

$dosya = $_FILES['image']['tmp_name'];

if(!isset($dosya)) 
{
        echo "lütfen dosya sec";
}
else
{     
        if($dosya == null)
        {
                echo "bos dosya yukleme yapılmıyor";
        }
        else
        {
        $image  = file_get_contents($_FILES['image']['tmp_name']);
       
        $V_image_name = addcslashes($_FILES['image']['tmp_name'],"W");

        $V_image = getimagesize($_FILES['image']['tmp_name']);

       if($V_image == false)
       {
                echo "it's not a picture, it hasn't any size";
                echo "yüklemek icin resim seciniz";
       }
       else
       {
              if($eklequery = mysqli_query($con,"insert into Vehicle(V_image_name,V_image)
               Values('$V_image_name','$V_image')"))
              {
                echo "resminiz basarı ile yuklendi";                 
              }
              else
              {
                echo "resim yuklenirken hata olustu";     
              }


       }
    }
}
}

$sql2 = "select V_image from Vehicle where V_advert_no = 1000000012";

if($res = mysqli_query($con,$sql2))
{
        echo "foto cekildi";
}
else
{
        echo "cekilemedi";
}



 ?>

  

<div class="banner"><?print"<img src=\"$res\" width=\"100px\" height=\"100px\"\/>";?></div>