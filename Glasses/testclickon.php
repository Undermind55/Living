<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
.label{
  width:auto;
  }
.label:hover{
  background:#ccc;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
</head>
<body>
<button type="" style="width: 300px; height: 150px;"  onclick="myFunction()" id="myButton"></button>
<?php 
$num = 1;

echo "1";

 ?>

<br><br><br><br>

<form>
	<input type="button" onclick="incrementValue2()" value="-" />
   <input type="text" id="number" value="0" style="width: 30px;" />
   <input type="button" onclick="incrementValue()" value="+" />
</form>
</body>
</html>
<script>
function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}
function incrementValue2()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value--;
    document.getElementById('number').value = value;
}
</script>