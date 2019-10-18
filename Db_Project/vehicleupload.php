
<?php include("baglan.php")?>

<html>
<head>
<meta charset = "UTF-8">
<link href="vehicleupload.css" type="text/css" rel="stylesheet"/>
<title>Ayas Web Kullanici girisi</title>
</head>

<body>
        <form action="vehicleupload.php" method="POST" enctype="multipart/form-data">

                <div class="banner">Ayas's Garage</div>
                <div class="container2">
                        <a href="admininterface.php" class="menuboxx">Admin Page</a>
                </div>
                <div class="container5">
                <div class="container3">
                        <div class="box">Advert Date</div>
                        <input type="text" class="textarea" name ="Date"  placeholder="00/00/0018" value="" /> 

                        <div class="box">Brand</div>
                        <input type="text" class="textarea" name ="Brand"  placeholder="Fisker" value="" /> 

                        <div class="box">Model</div>
                        <input type="text" class="textarea" name ="Model"  placeholder="Karma" value="" /> 

                        <div class="box">Production Year</div>
                        <input type="number" class="textarea" name ="Year"  placeholder="0018" value="" /> 

                        <div class="box">Km</div>
                        <input type="number" class="textarea" name ="Km"  placeholder="1234" value="" /> 

                        <div class="box">Type</div>
                        <input type="text" class="textarea" name ="Type"  placeholder="Sedan" value="" /> 

                        <div class="box">Fuel Type</div>
                        <input type="text" class="textarea" name ="FuelType"  placeholder="Diesel" value="" /> 

                        <div class="box">Gear</div>
                        <input type="text" class="textarea" name ="Gear"  placeholder="automatic" value="" /> 

                        <div class="box">Color</div>
                        <input type="text" class="textarea" name ="Color"  placeholder="Red" value="" /> 

                        <div class="box">Plate</div>
                        <input type="text" class="textarea" name ="Plate"  placeholder="35 DC 35" value="" /> 

                        <div class="box">Price</div>
                        <input type="number" class="textarea" name ="Price"  placeholder="123456" value="" /> 
                        
                       
                </div>

                <div class="container4">
                        <input type="file" name="image"><input type="submit" value="Upload Car" name ="upload">
                        </div>
                        </div>




                <div class="footer">Footer</div>
                
        </div>
        </form>

</body>
</html>
<!--       
-->



<?php


if (isset($_POST['upload']))
{
        $addpicture = false;
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
        $resim = file_get_contents($_FILES['image']['tmp_name']);
        $resim_ismi = addcslashes($_FILES['image']['tmp_name'],"W");
                
        $resim_boyutu = getimagesize($_FILES['image']['tmp_name']);
                
        if($resim_boyutu == false)
        {
        echo "it's not a picture, it hasn't any size";
        echo "yüklemek icin resim seciniz";
        }
        else
        {
        if($eklequery = mysqli_query($con,"insert into depo (id,name,image) Values('','$resim_ismi', '$resim_boyutu')"))
        {
        echo "resminiz basarı ile yuklendi";
        $addpicture = true;
        }
        else
        {
        echo "resim yuklenirken hata olustu";
        }
                


       }
       }
}
}







if (isset($_POST['upload']))
{
    $addtext = false;
    $V_advert_date = $_POST['Date'];
    $V_brand = $_POST['Brand'];
    $V_model = $_POST['Model'];
    $V_product_of_year = $_POST['Year'];
    $V_km = $_POST['Km'];
    $V_type = $_POST['Type'];
    $V_fuel_type = $_POST['FuelType'];
    $V_gear_type = $_POST['Gear'];
    $V_color = $_POST['Color'];
    $V_plate = $_POST['Plate'];
    $V_price = $_POST['Price'];
    if( $V_advert_date == "" | $V_brand == "" | $V_model == "" | $V_product_of_year == "" | $V_km == "" | $V_type == "" | $V_fuel_type == ""
    | $V_gear_type == "" |  $V_color == "" | $V_plate == "" | $V_price == "")
    {
        $addtext = false;
        $message = "Please fill ALL the spaces";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
            $addtext = true;
            echo "Yazılar Dolduruldu";

            echo $V_advert_date."-".$V_brand."-".$V_model."-".$V_product_of_year."-".$V_km."-".$V_type."-".$V_fuel_type."-".
            $V_gear_type."-".$V_color."-".$V_plate."-".$V_price;
            
    }
  
  
#}

if($addtext == true & $addpicture == true)
{
        $sql = "insert into Vehicle(V_image_name,V_image,
        V_advert_date,V_brand,V_model,V_product_of_year,
                                    V_type,V_fuel_type,V_gear_type,V_color,
                                    V_plate,V_price,V_km
                                    )
        Values ('$resim_ismi', '$resim_boyutu',
                '$V_advert_date','$V_brand','$V_model','$V_product_of_year',
                '$V_type','$V_fuel_type','$V_gear_type','$V_color',
                '$V_plate','$V_price','$V_km')";

       
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
else
{
        echo $addtext."/r/n";
        echo $addpicture;
}


}#
?>

