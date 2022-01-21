<meta charset="UTF-8">
<?php
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

$sql = "SELECT * FROM `order` ";
$result = $conn->query($sql);


echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'>
<td>สถานะ</td>
<td>รหัสORDER</td>
<td>จำนวนสินค้า(กระปุก)</td>
<td>หมายเหตุ**</td>
<td>ชื่อ-สกุล</td>
<td>เบอร์โทร</td>
<td>ตำบล</td>
<td>อำเภอ</td>
<td>จังหวัด</td>
<td>รหัสไปรษณีย์</td>
<td>วันที่สั่ง</td>
<td>แก้ไข</td>
<td>ลบ</td></tr>";
  while($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>" .$row["statuat"] .  "</td> ";
  echo "<td>" .$row["idorder"] .  "</td> ";
  echo "<td>" .$row["sum"] .  "</td> ";
  echo "<td>" .$row["maessges"] .  "</td> ";
  echo "<td>" .$row["name"] .  "</td> ";
  echo "<td>" .$row["tel"] .  "</td> ";
  echo "<td>" .$row["tambon"] .  "</td> ";
  echo "<td>" .$row["aumpuer"] .  "</td> ";
  echo "<td>" .$row["city"] .  "</td> ";
  echo "<td>" .$row["post"] .  "</td> ";
  echo "<td>" .$row["created"] .  "</td> ";

  echo "</tr>";


  //แก้ไขข้อมูลส่่ง member_id ที่จะแก้ไขไปที่ฟอร์ม

}
echo "</table>";

//5. close connection


?>
