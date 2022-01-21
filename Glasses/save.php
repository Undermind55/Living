<?php
header('Content-Type: text/html; charset=utf-8');
//1. เชื่อมต่อ database:
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multiplus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


	$name=$_POST['name'];
	$tel=$_POST['tel'];
	$tambon=$_POST['district'];
	$aumpuer=$_POST['amphoe'];
	$city=$_POST['province'];
	$post=$_POST['zipcode'];
  $sum=$_POST['sum'];
	$statuat='เตรียมจัดส่ง';
	$maessges=$_POST['maessges'];

	$sql = "INSERT INTO multiplus.order (name, tel, tambon,aumpuer,city,post,sum,statuat,maessges)
					VALUES ('$name', '$tel', '$tambon','$aumpuer','$city','$post','$sum','$statuat','$maessges' )";
	$re = mysqli_query($conn,$sql);
	if ($re){
		echo "แอดเข้าฐานข้อมูลแล้ว";

	}else {
		echo "Error".mysqli_error($conn);
	}
	mysqli_close($conn);

  ?>
