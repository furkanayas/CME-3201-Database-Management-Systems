
<?php include("baglan.php")?>
<meta charset ="UTF-8">
<html>
<head>
<meta charset = "UTF-8">
<title>Ayas Web Kullanici girisi</title>
<link href="vehicle.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<form action="" method = "POST">

<?php

$sql = "SELECT COUNT(*) FROM Vehicle";
$result = mysqli_query($con,$sql) or trigger_error("SQL", E_USER_ERROR);
$r = mysqli_fetch_row($result);
$numrows = $r[0];

#$rowsperpage = 3;
$rowsperpage = 1;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);


if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
    // cast var as int
    $currentpage = (int) $_GET['currentpage'];
 } else {
    // default page num
    $currentpage = 1;
 }

 if ($currentpage > $totalpages) {
    // set current page to last page
    $currentpage = $totalpages;
 } // end if
 // if current page is less than first page...
 if ($currentpage < 1) {
    // set current page to first page
    $currentpage = 1;
 } 

 $offset = ($currentpage - 1) * $rowsperpage;

 $sql = "SELECT V_price,V_advert_no,V_advert_date,V_brand,V_model,V_type,V_product_of_year,V_fuel_type,V_gear_type,V_km,V_color,V_plate,V_image,V_image_name FROM Vehicle LIMIT $offset, $rowsperpage";
 $result = mysqli_query($con,$sql) or trigger_error("SQL", E_USER_ERROR);

 while ($list = mysqli_fetch_assoc($result)) {
    // echo data
    $price = $list['V_price'];
    $adno = $list['V_advert_no'];
    $image = $list['V_image'];
    $ano = $list['V_advert_no'];
    $imagename = $list['V_image_name'];
    $brand = $list['V_brand'];
    $model = $list['V_model'];
    $py = $list['V_product_of_year'];
    $addate = $list['V_advert_date'];
    $plate = $list['V_plate'];
    $gear = $list['V_gear_type'];
    $fuel = $list['V_fuel_type'];
    $type = $list['V_type'];
    $km = $list['V_km'];
    $color = $list['V_color'];

    

    echo $list['V_advert_no'] . " : " . $list['V_advert_no'] .  " : " . $list['V_advert_date'].  " : " . $list['V_brand'].  " : " 
    . $list['V_model']. " : " . $list['V_type'] . " : " . $list['V_product_of_year']. " : " . $list['V_fuel_type']. " : " .
    $list['V_gear_type']. " : " . $list['V_km']. " : " . $list['V_color']. " : " . $list['V_plate']."<br />";
 } 
 
 //  echo "data: $mime $result['$data']";
//   echo '<img src="data:image/jpeg;base64,'.base64_encode($image->load()) .'" />';

   // header("content-type : image/jpeg");
     //header("Content-Length: " . filesize($imagedata));
  // echo $imagedata;

 $range = 3;
 if ($currentpage > 1) {
    // show << link to go back to page 1
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
    // get previous page num
    $prevpage = $currentpage - 1;
    // show < link to go back to 1 page
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
 } 

 for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
    // if it's a valid page number...
    if (($x > 0) && ($x <= $totalpages)) {
       // if we're on current page...
       if ($x == $currentpage) {
          // 'highlight' it but don't make a link
          echo " [<b>$x</b>] ";
       // if not current page...
       } else {
          // make it a link
          echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
       } // end else
    } // end if 
 } // end for
 
 // if not on last page, show forward and last page links        
 if ($currentpage != $totalpages) {
    // get next page
    $nextpage = $currentpage + 1;
     // echo forward link for next page 
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";
    // echo forward link for lastpage
    //  <div class = 'image' id="none" data-panel_type="none"><img src="<?php echo $imgname;
    //>" alt="Car"width="427"  height="240" ></div>     "vehicle.php?id= $ano"<img src="$imagedata">

    // <img src="bent.jpg" alt="Car" width="427"  height="240"/>
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
 }
?>


<div class="container">
    <div class="banner">Ayas's Garage</div>
        <div class="container3"> 
        <a href="index.php" class="box">Main Page</a>     
        </div>
        <div class="container4"> 
           
            <div id="car">
           
                <div class = 'image' id="none" data-panel_type="none"> <img src="bent.jpg" alt="Car" width="427"  height="240"/> </div>

                <div class = 'brand' id="none" data-panel_type="none"><p class="p1">Brand</p><?php echo $brand ?></div>
                <div class = 'model' id="none" data-panel_type="none"><p class="p1">Model</p><? echo $model ?></div>
                <div class = 'advertno' id="none" data-panel_type="none"><p class="p1">Advert-no</p><? echo $adno ?></div>
                <div class = 'prodyear' id="none" data-panel_type="none"><p class="p1">Production-year</p><? echo $py?></div>

                <div class = 'km' id="none" data-panel_type="none"Km><p class="p1">Km</p><? echo $km ?></div>
                <div class = 'color' id="none" data-panel_type="none"><p class="p1">Color</p><? echo $color?></div>
                <div class = 'price' id="none" data-panel_type="none"><p class="p1">Price</p><? echo $price ?></div>
                <div class = 'advertdate' id="none" data-panel_type="none"><p class="p1">Advert-date</p><? echo $addate ?></div>

                <div class = 'type' id="none" data-panel_type="none"><p class="p1">Type</p><? echo $type ?></div>
                <div class = 'fueltype' id="none" data-panel_type="none"><p class="p1">Fuel</p><? echo $fuel ?></div>
                <div class = 'geartype' id="none" data-panel_type="none"><p class="p1">Gear</p><? echo $gear ?></div>
                <div class = 'plate' id="none" data-panel_type="none"><p class="p1">Plate</p><? echo $plate ?></div>      
            </div>
<!---
            <div id="car">
               
                <div class = 'image' id="none" data-panel_type="none"><img src="may.jpg" alt="Car" width="427"  height="240"/></div>

                <div class = 'brand' id="none" data-panel_type="none"><p class="p1">Brand</p><? echo $brand ?></div>
                <div class = 'model' id="none" data-panel_type="none"><p class="p1">Model</p><? echo $model ?></div>
                <div class = 'advertno' id="none" data-panel_type="none"><p class="p1">Advert-no</p><? echo $adno ?></div>
                <div class = 'prodyear' id="none" data-panel_type="none"><p class="p1">Production-year</p><? echo $py?></div>

                <div class = 'km' id="none" data-panel_type="none"Km><p class="p1">Km</p><? echo $km ?></div>
                <div class = 'color' id="none" data-panel_type="none"><p class="p1">Color</p><? echo $color?></div>
                <div class = 'price' id="none" data-panel_type="none"><p class="p1">Price</p><? echo $price ?></div>
                <div class = 'advertdate' id="none" data-panel_type="none"><p class="p1">Advert-date</p><? echo $addate ?></div>

                <div class = 'type' id="none" data-panel_type="none"><p class="p1">Type</p><? echo $type ?></div>
                <div class = 'fueltype' id="none" data-panel_type="none"><p class="p1">Fuel</p><? echo $fuel ?></div>
                <div class = 'geartype' id="none" data-panel_type="none"><p class="p1">Gear</p><? echo $gear ?></div>
                <div class = 'plate' id="none" data-panel_type="none"><p class="p1">Plate</p><? echo $plate ?></div>      
            </div>

            <div id="car">
               
                <div class = 'image' id="none" data-panel_type="none"><img src="rol.jpg" alt="Car" width="427"  height="240"/></div>

                <div class = 'brand' id="none" data-panel_type="none"><p class="p1">Brand</p><? echo $brand ?></div>
                <div class = 'model' id="none" data-panel_type="none"><p class="p1">Model</p><? echo $model ?></div>
                <div class = 'advertno' id="none" data-panel_type="none"><p class="p1">Advert-no</p><? echo $adno ?></div>
                <div class = 'prodyear' id="none" data-panel_type="none"><p class="p1">Production-year</p><? echo $py?></div>

                <div class = 'km' id="none" data-panel_type="none"Km><p class="p1">Km</p><? echo $km ?></div>
                <div class = 'color' id="none" data-panel_type="none"><p class="p1">Color</p><? echo $color?></div>
                <div class = 'price' id="none" data-panel_type="none"><p class="p1">Price</p><? echo $price ?></div>
                <div class = 'advertdate' id="none" data-panel_type="none"><p class="p1">Advert-date</p><? echo $addate ?></div>

                <div class = 'type' id="none" data-panel_type="none"><p class="p1">Type</p><? echo $type ?></div>
                <div class = 'fueltype' id="none" data-panel_type="none"><p class="p1">Fuel</p><? echo $fuel ?></div>
                <div class = 'geartype' id="none" data-panel_type="none"><p class="p1">Gear</p><? echo $gear ?></div>
                <div class = 'plate' id="none" data-panel_type="none"><p class="p1">Plate</p><? echo $plate ?></div>      
            </div>

-->
        </div>
    <div class="footer">Footer</div>
    </div>






</body> 
</html>


