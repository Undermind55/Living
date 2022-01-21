<?php
include "conn.php"; 

$cus_name = $_POST['cus_name'];
$cus_tel = $_POST['cus_tel'];
$cus_address = $_POST['cus_address'];
$cus_provice = $_POST['province'];
$cus_amphoe = $_POST['amphoe'];
$cus_tumbon = $_POST['district'];
$cus_zipcode = $_POST['zipcode'];
$cus_price = $_POST['cus_price'];
$cus_comment = $_POST['cus_comment'];
$cus_tel2 = $_POST['cus_tel2'];
$cus_total = $_POST['cus_price'];
$date = date("d-m-Y");
$time = date("H:i:s");
$datetime = $date.$time;


//echo $cus_name;
//echo $cus_tel;
//echo $cus_address;
//echo $cus_provice;
//echo $cus_amphoe;
//echo $cus_tumbon;
//echo $cus_zipcode;
//echo $cus_comment;

$cus_real_price = ($cus_total * 790)+100;
$cus_real_number = ($cus_real_price-100)/790;



/*$servername = "vip031.phalconhost.com";
$username = "projecth";
$password = "admin198013";
$db_name = "projecth_Nuk";

$conn = mysqli_connect($servername,$username,$password,$db_name);*/

$sql = "INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_tel`, `cus_address`, `cus_provice`, `cus_amphoe`, `cus_tumbon`, `cus_zip`, `cus_price`, `cus_comment`,`type`,`date`) VALUES (NULL, '$cus_name', '$cus_tel', '$cus_address', '$cus_provice', '$cus_amphoe', '$cus_tumbon', '$cus_zipcode', '$cus_real_price', '$cus_comment','Glasses','$datetime');";
 $query = mysqli_query($conn,$sql);

 $sql2 = "SELECT * FROM customer ORDER BY cus_id DESC LIMIT 0,1";
 $result = $conn->query($sql2);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title> </title>
 	<style>
	.sub{
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 10%;
   background-color: red;
   color: white;
   text-align: center;
   opacity: 0.8;
   border-radius: 10px;
	}
    .sub2{
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 10%;
   background-color: black;
   color: white;
   text-align: center;
   opacity: 0.8;
   border-radius: 10px;
   margin-bottom:70px;
	}
.container2 {
      width: 95%;

      margin-right: auto;
      margin-left: auto;
      background-color: ;}
 </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
 </head>
 <body>
<p style="width: 100%; height: 40px; background-color: red; margin-top: -5px; padding: 10px; font-size: 25px; color:white;" align="center"><b>	รายละเอียดการสั่งซื้อสินค้า </b><br></p>
<div class="container2">
<div align="center" style="text-align:left" >
	<?php 
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<font style='font-size:18px;'>";
        echo "&#3649;&#3623;&#3656;&#3609;&#3605;&#3634;&#3586;&#3633;&#3610;&#3619;&#3606;&#3585;&#3621;&#3634;&#3591;&#3588;&#3639;&#3609;<br>color : แดง <br> ราคาใบสั่ง " . $row["cus_price"]."<br>จำนวนที่สั่ง :".$cus_real_number. "<br> ชื่อ-นามสกุล " . $row["cus_name"]. "<br>เบอร์โทรศัพท์มือถือ(ทางร้านอาจจะมีการติดต่อกลับ) :" . $row["cus_tel"]. "<br>"."ภูมิภาค :"."<font color='#ff8000'><strong><b>จังหวัด</b></strong></font>".$row["cus_provice"]."&nbsp;&nbsp;<font color='#ff8000'><strong><b>อำเภอ</b></strong></font>".$row["cus_amphoe"]."<br>รายละเอียดที่อยู่ :".$row['cus_address']."<br>รหัสไปรษณีย์ :".$row['cus_zip']."<br>"."ฝากข้อความและหมายเหตุ :".$row['cus_comment']."";
        echo "</font>";
    }
} else {
    echo "0 results";
}


	 ?>
</div>
 



</center>
<center>
<div class="col-6 .col-md-4">
   <div>
    <p  style="border:1px;
   border-color:red;
   background-color: #d0d0d0;
   border-radius: 10px;
   height: 90px;
   text-align: center;;
   font-weight: bold;
   font-size: 20px;
   
   ">
  
    การจัดส่ง 1- 3 วันโปรดรับโทรศัพท์จากขนส่งจะโทรแจ้งล่วงหน้า
    </h3></p>
  </div>
</div>
<form action="page2.php" method="post" >
  

</form><br><br>
<form action="page4.php" method="post" >
 <!-- <button name="" value="ยืนยันการสั่งสินค้า" style="width: 60%;
  height:  15%;
  background-color: red;
  border:none;
  color:white;
  font-size:20px;
  border-radius: 10px;

    position :static; " ><font size="25"> ยืนยันการสั่งซื้อสินค้า</font></button>
 -->
</form>

</center>
<!-- <button name=""  style=" position: fixed;
   left: 0;
   width: 100%;
   height: 10%;
   background-color: #ff9900;
   color: white;
   text-align: center;
   opacity: 0.8;
   border-radius: 10px;
   margin-bottom: 10%;
   border:none;
  
   " ><font size="25"> แก้ไขข้อมูล </font></button>
<a href="page4.php"><button class="sub"><font size="25">&#3618;&#3639;&#3609;&#3618;&#3633;&#3609;&#3585;&#3634;&#3619;&#3626;&#3633;&#3656;&#3591;&#3595;&#3639;&#3657;&#3629;</font></button></a>
-->
 <a href="page2.php">
 <div class=".col-md-8">
    <div class="sub2">
    <p style="font-size:20px;">แก้ไขข้อมูล</p>
    </div>
</div>
</a>
<a href="page4.php">
 <div class=".col-md-8">
    <div class="sub">
    <p style="font-size:20px;">ยืนยันการสั่งซื้อ</p>
    </div>
</div>
</a>



 </body>
 </html>
<!-- Facebook Pixel Code --> <!-- Facebook1 -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '2046172025635036'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=2046172025635036&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '672049976475465');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=672049976475465&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2116580125289149');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2116580125289149&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<script>
	fbq('track', 'livingbigsale_Glasses_page3');
</script>