
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/undermind.css">
<style>
.bottomred
{
	width: 100%;
	height:  20%;
	background-color: #fa215f;
	border-width: 100%;
	border-height:20%;


    position :static; 
} 
    .container {
      width: 70%;

	  margin-right: auto;
	  margin-left: auto;
	  background-color: white; 
} 
	.inner_position_top {
	position:absolute;
	display:block;
	background-color:#CC99FF;
	height:50px; /* กำหนดความสูงส่วนของเนื้อหาที่นำมาซ้อนทับ */
	width:100%; /*กำหนดความกว้างของเนื้อหาที่นำมาซ้อนทับ แบบขยายเต็ม */
	top:0px; /* cssกำหนดชิดด้านบน  */     
	z-index:999; 
} 
.line1{
     width: 100%;
     height:50px;     
     background-color: #fa215f;     
     border-color: #fa215f;     
     font-size: 50px;
     font-color:#FFFFFF;
 }
.fontblod{     
	font-size: 16px;

}
.head{
	  width: 100%; 
	  height: 30px; 
	  font-size: 30px;
	  color:white;
	  left:0px;
      bottom:0px;
      z-index: 99;
      text-align: left;
      padding:20px;
      clear:both;
      margin:-10px;

background: #666666; 

}
header{
	width: 100%;
	height: 30px;
	background-color: red;
	font-size: 100%;
}





</style>
<script language="javascript">
function chkValue()
{
if(document.frMain.txtName.value == 'Please Input Name')
{	
document.frMain.txtName.value = '';
}
}
</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<title>
		 
	</title>

</head>
<body style="background-color: #ebebe0">
	<form action="" method="get" accept-charset="utf-8">
		
		
	
	<div class="container">
		
		<div class="head">
			&nbsp;<img src="img2/chart.png" style="width: 25px; height:25px;">&nbsp;กาวอเนกประสงค์
		</div><br>
		<p>สี......</p>
		<img src="img_product/product1.jpg" style="width: 25%;height: 25%;">
		<p>ราคาใบสั่งซื้อ</p>
		<p>จำนวนจอง</p>
		<p>ชื่อจริง</p>
		<input type="text" name="name">
		<p>เบอร์โทรศัพท์มือถือ(ทางร้านอาจจะมีการติดต่อกลับ)</p>
		<input type="text" name="tel">
		<p>ตำบล</p>
		<input id="province" style="width: 100%; height: 35px;">
		<p>อำเภอ</p>
		<input id="aumphoe" style="width: 100%; height: 35px;">
		<p>ที่อยู่</p>
		<input type="text" name="address">
	
	</div>
	</form>
</body>
</html>

<script>
	$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

</script>
<script>
$( "#province" ).autocomplete({
  source: [ "เชียงใหม่", "กรุงเทพ", "เชียงราย", "นครราชสีมา", "ปัตตานีั", "มิลาน", "ซายูริ" ]
});
$( "#aumphoe").autocomplete({
	source: ["เมืองสมุทรปราการ", "บางบ่อ บางพลี", "พระประแดง", "พระสมุทรเจดีย์", "บางเสาธง", "เมืองนนทบุรี", "บางกรวย", "บางใหญ่", "บางบัวทอง", "ไทรน้อย", "ปากเกร็ด", "เทศบาลนครนนทบุรี(สาขาแขวงท่าทราย)", "เทศบาลเมืองปากเกร็ด", "เมืองปทุมธานี", "คลองหลวง ธัญบุรี", "หนองเสือ", "ลาดหลุมแก้ว", "ลำลูกกา สามโคก", "ลำลูกกา (สาขาตำบลคูคต)","พระนครศรีอยุธยา", "ท่าเรือ", "นครรหลวง", "บางไทร", "บางบาน", "บางปะอิน", "บางปะหัน", "ผักไห่", "ภาชี", "ลาดบัวหลวง", "วังหลวง", "เสนา", "บางซ้าย", "อุทัย", "มหาราช", "บ้านแพรก", "เมืองอ่างทอง", "ไชโย", "ป่าโมก", "โพธิ์ทอง", "แสวงหา", "วิเศษชัยชาญ", "สามโก้", "เมืองลพบุรี", "พัฒนานิคม", "โคกสำโรง", "ชัยบาดาล", "ท่าวุ้ง", "บ้านหมี่", "ท่าหลวง", "สระโบสถ์", "โคกเจริญ", "ลำสนธิ", "หนองม่วง","บ้านเช่า", "เมืองสิงห์บุรี", "บางระจัน", "ค่ายบางระจัน", "พรหมบุรี", "ท่าช้าง", "อินทร์บุรี", "เมืองชัยนาท", "มโนรมย์", "วัดสิงห์", "สรรพยา", "สรรคบุรี", "หันคา", "sov',tF,'"]
});
</script>
