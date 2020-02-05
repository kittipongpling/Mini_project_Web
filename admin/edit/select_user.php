<?php
include('./../../connect/BaseModel.php');
$sql = "SELECT * FROM `user` ORDER BY `fname` ASC";
$result = $conn->query($sql);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แสดงสมาชิก</title>
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
            <h3>แก้ไขสมาชิก</h3>
        </div>
<br>
        <div align="center">
<table style="width:70%">
  <tr>
    <th>ชื่อสมาชิก</th>
    <th >นามสกุลสมาชิก</th>
    <th >รหัสสมาชิก</th>
    <th >รหัสผ่านสมาชิก</th>
    <th >เบอร์โทร</th>
    <th >สถานะ</th>
    <th >แก้ไขสมาชิก</th>
    <th >ลบสมาชิก</th>
  </tr>
  <?php foreach($result as $data){?>
  <tr>
    <td><?php echo $data['fname']; ?></td>
    <td><?php echo $data['lname']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['tell']; ?></td>
    <td><?php echo $data['Userlevel']; ?></td>
    <td><button><a href="./form_select_user.php?id=<?php echo $data['id']; ?>">e</a></button></td>
    <td><button><a href="./delete.php?id=<?php echo $data['id']; ?>">d</a> </button></td>
   
    
  </tr>
  <?php }?>
</table>

</div>
<div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="./insert.php" type="button" class="btn btn-primary">เพิ่มสมาชิก</a>
                        <!-- <button type="hidden" class="btn btn-success">บันทึก</button> -->
                        <a class="btn btn-default" href="./../index_user.php">กลับ</a>
                    </div>
                </div>
</body>
</html>