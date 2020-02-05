<?php session_start();
// if($_GET["id"]==''){ 
//   echo "<script type='text/javascript'>"; 
//   echo "alert('กรุณา login เพื่อเข้าระบบ');"; 
//   echo "window.location = '../index.php'; "; 
//   echo "</script>"; 
//   }
?>
<?php
include('../connect/BaseModel.php');
$sql = "SELECT * FROM total";
$result = $conn->query($sql);



   
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
*{
  
}
body {
  padding:5px 150px;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.footer {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;

  position: fixed;
  
  bottom: 0;
  width: 84%;
}
.tae{
  height:50px;
}
.filter{
  filter: drop-shadow(10px 10px 10px gray);
  
}
.lol{
  border:1px solid #333;
  background-color:white;
  
}
</style>
</head>
<body>

<div class="tae">
<div  class="w3-bar w3-border w3-card-4 w3-light-grey tae">
  <a href="#" class="w3-bar-item w3-button">ร้านค้าออนไลน์</a>
  <a href="#" class="w3-bar-item w3-button">ติดต่อ/โฆษณา</a>
  <a href="#" class="w3-bar-item w3-button">ประชาสัมพันธ์</a>
  <a  href="#" class="w3-bar-item w3-button w3-right"><?php print_r($_SESSION['User']);?> <?php print_r($_SESSION['Userlevel']);?></a>
  <a  href="./../index.php" class="w3-bar-item w3-button w3-right">ออกจากระบบ</a>
  
</div>
</div>
<!-- <div bgcolor="black">
<h1 align="right"><?php print_r($_SESSION['User']);?></h1>
<h3 align="right">ผู้ดูแลระบบ</h3>
</div> -->
<br>
<button class="w3-button w3-right"  value="เพิ่มสินค้า"><a href="form.php">เพิ่มสินค้า</a></button>
<button class="w3-button w3-right"  value="เพิ่มสินค้า"><a href="form.php">ตรวจสอบสมาชิก</a></button>
<div align="center">
<h1>ตรวจเช็คสินค้า</h1>
<hr>
<div class="w3-row-padding">
<?php foreach($result as $data){
  // echo $data['id']
 ?>
 
          <div style="width:20%;height:100%;" class="w3-col">
        <?php echo $data['fname']; ?>
          <div class="filter">
            <img width="200px" height="180px" src="<?php echo $data['files']; ?>" style="padding:10px 40px;width:100%;">
            <div align="center">
            <button><a href="edit.php?id=<?php echo $data['id'] ?>">ดูข้อมูล</a></button>
            <!-- <input  type="button" require value="สั่งซื้อ" name="rich">
            -->
            
      </div>
      </div>
    </div>
    
    <?php }?>
    
      <hr>
  </div>
 

  </div>
  <hr>
  <div   class="footer">
  <p>Miniproject Web Programming Grop 5</p>
</div>
</body>
</html>


