<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มสินค้า</title>
    <link rel="stylesheet" href="./../css/admin_insert.css">
</head>
<body>
    
<h2>เพิ่มสินค้า</h2>

<form enctype="multipart/form-data" action="./upload_file.php" method="POST">
  

  <div class="container" id="upload_avatar">
  <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    <label for="uname"><b>ชื่อสินค้า</b></label>
    <input type="text" placeholder="ตัวอย่าง IPhone 10 x" name="name" required>

    <label for="psw"><b>ราคาสินค้า</b></label>
    <input type="number" placeholder="ตัวอย่าง 1000" name="price" required>

    <label for="psw"><b>รูปภาพ</b></label><br>
    <input type="file"  name="image" required>
        
    <button name="avatar_upload" type="submit">คลิก เพื่อเพิ่ม</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="./index_user.php">Cancel</a></button>
    </div>
  
</form>
</body>
</html>