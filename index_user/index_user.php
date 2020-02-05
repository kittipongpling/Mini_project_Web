<?php
session_start();
include('./../connect/BaseModel.php');
$sql = "SELECT * FROM total";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ร้านค้าออนไลน์</title>
    <link rel="stylesheet" href="./../css/index_user.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <style>
    .w3-bar{width:100%;overflow:hidden}
    .w3-border{border:1px solid #ccc!important}
    
    .w3-bar-item{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0}
    .w3-button{white-space:normal}
    .w3-right{float:right!important}
    .w3-card-4{box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)}
    </style> -->
</head>
<body>
<div  class="w3-bar w3-border w3-card-4 w3-light-grey">
  <a href="#" class="w3-bar-item w3-button">ร้านค้าออนไลน์</a>
  <a href="#" class="w3-bar-item w3-button">ติดต่อ/โฆษณา</a>
  <a href="#" class="w3-bar-item w3-button">ประชาสัมพันธ์</a>
  <a  href="#" class="w3-bar-item w3-button w3-right"><span style="color:red;">คุณ :</span><?php print_r($_SESSION['user']);?><span style="color:red;">สถานะ :</span>  <?php print_r($_SESSION['Userlevel']);?></a>
  <a  href="./../index.php" class="w3-bar-item w3-button w3-right">ออกจากระบบ</a>
  
</div>
<section class="mac">
        <div class="container">
            <div class="mac-title">
                <h2>ยินดีต้อนรับ</h2>
                <h5>เลือกสินค้าที่ท่านต้องการ</h5>
            </div>
            <div class="mac-grid">
            <?php foreach($result as $data){
                ?>
                <div class="mac-grid-items">
                <br><br>
                    <img width="250px" src="./photo/<?php echo $data['files'];?>" alt="">
                    <div class="mac-items-info">
                        <p><?php echo $data['fname'];?></p>
                        <p>
                            จาก <s>฿6,000</s> เหลือ 
                        เพียง <a href="">฿<?php echo $data['price'];?></a></p>
                    </div>
                </div>
            <?php } ?>
                
                
            </div>
        </div>
    </section>
    <!-- <script >
    (function(){
    var burger = document.querySelector('.container'),
        header = document.querySelector('.header');
    
    burger.onclick = function() {
        header.classList.toggle('container');
    }
}());

    </script> -->
</body>
</html>