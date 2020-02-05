
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มสมาชิก</title>
    <link rel="stylesheet" href="./../css/index_user.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <h3>เพิ่มสมาชิก</h3>
        </div>

        <div class="row">
           
            <form class="form-horizontal" action="./insert_now.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <div class="form-group ">
                    <label class="col-sm-2 control-label">ชื่อ</label>
                    <div class="controls col-sm-6">
                        <input class="form-control" name="fname" type="text" placeholder="กิตติพงษ์" value="">

                        <span class="help-block"></span>

                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-sm-2 control-label">นามสกุล</label>
                    <div class="controls col-sm-6">
                        <input class="form-control" name="lname" type="text" placeholder="ปลิงกระโทก" value="">

                        <span class="help-block"></span>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">รหัสผู้ใช้</label>
                    <div class="controls col-sm-6">
                        <input class="form-control" name="username" type="text" placeholder="รหัส" value="">

                        <span class="help-block"></span>

                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-sm-2 control-label">รหัสผ่าน</label>
                    <div class="controls col-sm-6">
                        <input class="form-control" name="password" type="text" placeholder="รหัสผ่าน" value="">

                        <span class="help-block"></span>

                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-sm-2 control-label">เบอรร์โทรศัพท์</label>
                    <div class="controls col-sm-6">
                        <input class="form-control" name="tell" type="text" placeholder="0894456321" value="">

                        <span class="help-block"></span>

                    </div>
                </div>
                
                <div class="form-group ">
                    <label class="col-sm-2 control-label">สถานะ</label>
                    <div class="controls col-sm-6">
                        <!-- <input class="form-control" name="mobile" type="select" placeholder="A" value=""> -->
                        <select name="Userlevel">
  
  <option class="form-control" value="">-.-</option>
  <option class="form-control" value="A" >A</option>
  <option class="form-control" value="M" >M</option>
  
</select>
                        <span class="help-block"></span>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        <a class="btn btn-default" href="./select_user.php">กลับ</a>
                    </div>
                </div>
            </form>
           
        </div>
    </div>
</body>

</html>