<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
 <strong style="font-size: 25px; color:#ff751a;">จำนวน&nbsp;&nbsp;</strong>
        <input type="button" onclick="incrementValue2()" value="-" style="width: 40px; height: 40px; padding: 10px;" class="button1" />
   <input type="text" id="number" value="1" style="border:0px; font-size: 20px; width: 10px; text-align: center;" name="cus_price" />
   <input type="button" onclick="incrementValue()" value="+" style="width: 40px; height: 40px; padding: 10px;" class="button1" />
</form>
<br><br>
<form>
	<p>ราคา</p><input type="text" id="number2" value="0" style="border:0px; width: 100%;border:3px;border-color: red;color:red;font-size: 30px;" name="cus_price" />
	</form>
</body>
</html>
<script>
	
function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    var price = 690;
    value++;
   

    document.getElementById('number').value = value;
    document.getElementById('number2').value = value*price;
  
}
function incrementValue2()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    var price = 690;
    value--;
    document.getElementById('number').value = value;
    document.getElementById('number2').value = value*price;
}

</script>




