<?php
include('./../../connect/BaseModel.php');
$sql = "SELECT * FROM `total`";
$result = $conn->query($sql);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แสดงสินค้า</title>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../css/index_user.css">
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
 
}
th, td {
  padding: 5px;
  text-align: center;    
}
</style>
</head>
<body>
<div class="container">
        <div class="row">
            <h3>แก้ไขสินค้า</h3>
        </div>
<br>
        <div align="center">
<table style="width:70%">
  <tr>
    <th>ชื่อสินค้า</th>
    <th >ราคา</th>
    <th >รูป</th>
  
    <th >แก้ไขสินค้า</th>
    <th >ลบสินค้า</th>
  </tr>
  <?php foreach($result as $data){?>
  <tr>
    <td><?php echo $data['fname']; ?></td>
    <td><?php echo $data['price']; ?></td>
    <td><img width="60px" src="./../photo<?php echo $data['files']; ?>" alt=""></td>
   
    <td><button><a href="./edit.php?id=<?php echo $data['id']; ?>">e</a></button></td>
    <td><button><a href="./delete.php?id=<?php echo $data['id']; ?>">d</a> </button></td>
   
    
  </tr>
  <?php }?>
</table>

</div>
<div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="./insert.php" type="button" class="btn btn-primary">เพิ่มสินค้า</a>
                        <!-- <button type="hidden" class="btn btn-success">บันทึก</button> -->
                        <a class="btn btn-default" href="./../index_user.php">กลับ</a>
                    </div>
                </div>
</body>
</html>