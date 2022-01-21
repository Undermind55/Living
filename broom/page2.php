<?php 
$conn = mysqli_connect("localhost","root","","living");

?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>เครื่องดักแมลงวันไฮเทค</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/css/uikit.css">
    <link rel="stylesheet" href="./jquery.Thailand.js/dist/jquery.Thailand.min.css">
    
    <style>
        a, h1, h2, .h2{
            font-family: 'Kanit', sans-serif !important;
            line-height: 1.6em;
        }
        a{
            font-size: 1.4em;
        }
        label{
            font-size: 1.6em;
            display: block;
        }
        .container {
      width: 75%;

      margin-right: auto;
      margin-left: auto;
      background-color: white;}

      /*css Undermind*/
      .head{
      width: 100%; 
      height: 45px; 
      font-size: 30px;
      color:white;
      background: #ff1a1a; 
      border-radius: 10px
      box-shadow: 0 4px 5px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.container2 {
      width: 100%;
margin-right: auto;
      margin-left: 43px;
     
      background-color: # ;}

      /*css Undermind*/
  
      




 /*****************img *******************/
 .frame1 {
  border:1px solid navy;
  padding:5px;
  background-image:url(f_t.jpg);}
  .button1 {
    background-color: #ff1a1a; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px;
}


  
  
    </style>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-33058582-1', 'auto', {
            'name': 'Main'
        });
        ga('Main.send', 'event', 'jquery.Thailand.js', 'GitHub', 'Visit');
    </script>

</head>
<body style="background-color: #">
    <div class="container" style="align-content: center">
        <div class="head">
            &nbsp;<img src="img2/chart.png" style="width: 25px; height:25px;">&nbsp;เครื่องดักแมลงวันไฮเทค
        </div><br><br>
        <center><img src="img_product/product1.png" style="width: 50%;height: 50%;border: 0px solid ;
    border-radius: 10px;
    padding: 5px;" align="center"> </center>
    <div>

    ราคาใบสั่ง<input type="text" id="number2" value="790" style="border:0px; width: 30%;border:3px;border-color: red;color:red;font-size: 30px;text-align: center;" name="cus_price" />บาท<br><br><form id="demo1" class="demo" style="display:none;" autocomplete="off" uk-grid action="page3.php" method="post">
     <div><strong style="font-size: 20px; color:#ff751a;">จำนวน&nbsp;&nbsp;</strong>
        <button onclick="incrementValue2()" value="-" style="width: 40px; height: 40px; padding: 10px;box-shadow: 0 4px 5px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" class="button1" > - </button>
   <input type="text" id="number" value="1" style="border:0px; font-size: 20px; width: 30px; text-align: center;" name="cus_price" />
   <button onclick="incrementValue()" value="+" style="width: 40px; height: 40px; padding: 10px;box-shadow: 0 4px 5px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" class="button1" >+</button>
   </div> <!--<strong style="font-size: 15px; color:#ff751a;">ชิ้น</strong> -->


    

     <div class="container2">   
            <div class="uk-width-1-2@m">
            <label class="h2"><font style="color:red;">*</font>ชื่อ-นามสกุล</label>
            <input type="text" name="cus_name" class="uk-input uk-width-1-1" style="width: 100%" placeholder="กรุณาป้อนชื่อ - นามสกุล" required >
            </div>

                    <div class="uk-width-1-2@m">
            <label class="h2"><font style="color:red;">*</font>ที่อยู่</label>
            <input type="text" name="cus_address" class="uk-input uk-width-1-1" style="width: 100%" required >
        </div>


            <div class="uk-width-1-2@m">
                <label class="h2"><font style="color:red;">*</font>ตำบล / แขวง</label>
                <input name="district" class="uk-input uk-width-1-1" type="text" required >
            </div>

            <div class="uk-width-1-2@m">
				<label class="h2"><font style="color:red;">*</font>อำเภอ / เขต</label>
				<input name="amphoe" class="uk-input uk-width-1-1" type="text" required>
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2"><font style="color:red;">*</font>จังหวัด</label>
                <input name="province" class="uk-input uk-width-1-1" type="text" required>
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2"><font style="color:red;">*</font>รหัสไปรษณีย์</label>
                <input name="zipcode" class="uk-input uk-width-1-1" type="text" required>
            </div>
             <div class="uk-width-1-2@m">
             <label class="h2"><font style="color:red;">*</font>เบอร์โทรศัพท์</label>
           <input type="text" name="cus_tel" class="uk-input uk-width-1-1" style="width: 100%" placeholder="กรุณาป้อนเบอร์โทรศัพท์ที่ถูกต้อง" required maxlength="14">
        </div>
         <div class="uk-width-1-2@m">
             <label class="h2">เบอร์โทรศัพท์สำรอง</label>
           <input type="text" name="cus_tel2" class="uk-input uk-width-1-1" style="width: 100%" placeholder="กรุณาป้อนเบอร์โทรศัพท์สำรอง" maxlength="14" >
        </div>
        <div class="uk-width-1-2@m">
            <label class="h2">comment</label>
            <input type="textarea" name="cus_comment" style="width: 100%; height: 50px;">
        </div><p style="width: 210px; background-color: #ff1a1a;height: 3%;color:white;"><font style="color:red;">*</font>มีค่าบริการเก็บเงินปลายทาง</p> <br>
        <button name="" value="สั่งซื้อ" style="width: 100%;height:50px;background-color: #ff1a1a;border:none;color:white;font-size: 30px;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); border-radius: 8px;"> สั่งซื้อตอนนี้ </button><br><br>
        </form>
        <!-- END DEMO 1 -->

        <!-- DEMO 2 -->
        
        <!-- END DEMO 2 -->
    
       </div>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>
    
    <!-- dependencies for zip mode -->
    <script type="text/javascript" src="./jquery.Thailand.js/dependencies/zip.js/zip.js"></script>
    <!-- / dependencies for zip mode -->

    <script type="text/javascript" src="./jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="./jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    
    <script type="text/javascript" src="./jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
    
    <script type="text/javascript">
        /******************\
         *     DEMO 1     *
        \******************/ 
        // demo 1: load database from json. if your server is support gzip. we recommended to use this rather than zip.
        // for more info check README.md

        $.Thailand({
            database: './jquery.Thailand.js/database/db.json', 

            $district: $('#demo1 [name="district"]'),
            $amphoe: $('#demo1 [name="amphoe"]'),
            $province: $('#demo1 [name="province"]'),
            $zipcode: $('#demo1 [name="zipcode"]'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, .demo').toggle();
            }
        });

        // watch on change

        $('#demo1 [name="district"]').change(function(){
            console.log('ตำบล', this.value);
        });
        $('#demo1 [name="amphoe"]').change(function(){
            console.log('อำเภอ', this.value);
        });
        $('#demo1 [name="province"]').change(function(){
            console.log('จังหวัด', this.value);
        });
        $('#demo1 [name="zipcode"]').change(function(){
            console.log('รหัสไปรษณีย์', this.value);
        });

        /******************\
         *     DEMO 2     *
        \******************/ 
        // demo 2: load database from zip. for those who doesn't have server that supported gzip.
        // for more info check README.md
        $.Thailand({
            database: './jquery.Thailand.js/database/db.zip', 
            $search: $('#demo2 [name="search"]'),

            onDataFill: function(data){
                console.log(data)
                var html = '<b>ที่อยู่:</b> ตำบล' + data.district + ' อำเภอ' + data.amphoe + ' จังหวัด' + data.province + ' ' + data.zipcode;
                $('#demo2-output').prepend('<div class="uk-alert-warning" uk-alert><a class="uk-alert-close" uk-close></a>' + html + '</div>');
            }

        });
    </script>
</div>

</body>
</html>

<script>
function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    var price = 790;
    value++;
    document.getElementById('number').value = value;
    document.getElementById('number2').value = value*price;
}
function incrementValue2()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    var price = 790;
    value--;
    document.getElementById('number').value = value;
    document.getElementById('number2').value = value*price;
}
</script>
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
	fbq('track', 'livingbigsale_dog_page2');
</script>
