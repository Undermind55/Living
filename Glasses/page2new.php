<?php 
$conn = mysqli_connect("localhost","root","","living");

?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>กาวอเนกประสงค์</title>
    
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
      width: 60%;

      margin-right: auto;
      margin-left: auto;
      background-color: white;}

      /*css Undermind*/
      .head{
      width: 100%; 
      height: 45px; 
      font-size: 30px;
      color:white;
      background: #d8000b; 

}
.container2 {
      width: 100%;
margin-right: auto;
      margin-left: 43px;
     
      background-color: #ffe6e6 ;}

      /*css Undermind*/
  
      




 /*****************img *******************/
 .frame1 {
  border:1px solid navy;
  padding:5px;
  background-image:url(f_t.jpg);}


  
  
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
<body style="background-color: #ebebe0">
    <div class="container">
        <div class="head">
            &nbsp;<img src="img2/chart.png" style="width: 25px; height:25px;">&nbsp;กาวอเนกประสงค์
        </div><br><br>
        <center><img src="img_product/product1.png" style="width: 50%;height: 50%;border: 0px solid ;
    border-radius: 10px;
    padding: 5px;" align="center"> </center><div class="uk-container uk-padding"><form id="demo1" class="demo" style="display:none;" autocomplete="off" uk-grid action="page3.php" method="post">
     <strong style="font-size: 30px; color:#ff751a;">จำนวน&nbsp;&nbsp;</strong>
        <input type="button" onclick="incrementValue2()" value="-" style="width: 40px; height: 40px; padding: 10px;"/>
   <input type="text" id="number" value="0" style="width: 30px;border:0px; font-size: 20px; font-variant: center;" name="cus_price" />
   <input type="button" onclick="incrementValue()" value="+" style="width: 40px; height: 40px; padding: 10px;" /> <strong style="font-size: 30px; color:#ff751a;">ชิ้น</strong>

    

 

      
<div class="container2">
        <hr>    
            <div class="uk-width-1-2@m">
            <label class="h2">ชื่อ-นามสกุล</label>
            <input type="text" name="cus_name" class="uk-input uk-width-1-1" style="width: 100%" placeholder="กรุณาป้อนชื่อ - นามสกุล">
            </div>

                    <div class="uk-width-1-2@m">
            <label class="h2">ที่อยู่</label>
            <input type="text" name="cus_address" class="uk-input uk-width-1-1" style="width: 100%">
        </div>


            <div class="uk-width-1-2@m">
                <label class="h2">ตำบล / แขวง</label>
                <input name="district" class="uk-input uk-width-1-1" type="text">
            </div>

            <div class="uk-width-1-2@m">
				<label class="h2">อำเภอ / เขต</label>
				<input name="amphoe" class="uk-input uk-width-1-1" type="text">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">จังหวัด</label>
                <input name="province" class="uk-input uk-width-1-1" type="text">
            </div>

            <div class="uk-width-1-2@m">
                <label class="h2">รหัสไปรษณีย์</label>
                <input name="zipcode" class="uk-input uk-width-1-1" type="text">
            </div>
             <div class="uk-width-1-2@m">
             <label class="h2"><font style="color:red;">*</font>เบอร์โทรศัพท์</label>
           <input type="text" name="cus_tel" class="uk-input uk-width-1-1" style="width: 100%" placeholder="กรุณาป้อนเบอร์โทรศัพท์ที่ถูกต้อง เช่น 09154163XX">
        </div>
        <div class="uk-width-1-2@m">
            <label class="h2">comment</label>
            <input type="textarea" name="cus_comment" style="width: 100%; height: 30px;">
        </div>*มีค่าบริการเก็บเงินปลายทาง <br>
        <input type="submit" name="" value="สั่งซื้อ" style="width: 100%;height:50px;background-color: #d8000b;border:none;color:white;font-size: 30px;">
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