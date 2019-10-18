<?php
// Host (**)
// DB name (*)
// User name (**)
// Password (**)

//mysql_select_db(); --> mysql veritabanını seç(*)
//mysql_connect(); --> mysql bağlanmayı sağlar(**)

//localhost ta kullanici root, sifre boştur
//bu 3 ü standart tanımlamalardır,localhost için

$host ="localhost";
$database = "Db_Project"; //opsiyonel, oluturduğumuz vt adı
$user ="root";
$password ="";
//$baglan = mysql_connect($host,$user,$password) or die ("baglantı yok");;
//önce sifre sonra baglantı
//$baglan2 = mysql_select_db($database,$baglan) or die ("vt seçilemedi");

$con = mysqli_connect($host,$user,$password,$database);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  {
   //echo 'connection succesfull MySQL'."<br>";
  }
/*
$sayi1 = 5;$sayi2 = 10;$carpim = $sayi1*$sayi2;
print($carpim)."<br>"."php deneme bitti"."<br>";

//veri girişi için insert
//     güncellemek update,
//     silmek delete,

$Name = "Furkan";
$Surname = "Ayas";
$Age = 22;
$City = "İzmir";

$val = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM User Where U_name = 'Furkan'"));
$name =$val['U_password'];

echo $name; */



?>