
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มสินค้า</title>
    <link rel="stylesheet" href="./../css/index_user.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <h3>เพิ่มสินค้า</h3>
        </div>

        <div class="row">
           
            <form enctype="multipart/form-data" class="form-horizontal" action="./insert_now.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                
                <div class="form-group ">
                    <label class="col-sm-2 control-label">ชื่อสินค้า</label>
                    <div class="controls col-sm-6">
                        <input class="form-control" name="fname" type="text" placeholder="ตัวอย่าง Iphone" value="">

                        <span class="help-block"></span>

                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-sm-2 control-label">ราคา</label>
                    <div class="controls col-sm-6">
                        <input class="form-control" name="price" type="number" placeholder="ตัวอย่าง 9900" value="">

                        <span class="help-block"></span>

                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-sm-2 control-label">รูปสินค้า</label>
                    <div class="controls col-sm-6">
                        <input class="form-control" name="image" type="file" placeholder="" value="">

                        <span class="help-block"></span>

                    </div>
                </div>
                
                        <span class="help-block"></span>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button name="avatar_upload" type="submit" class="btn btn-success">บันทึก</button>
                        <a class="btn btn-default" href="./select_product.php">กลับ</a>
                    </div>
                </div>
            </form>
           
        </div>
    </div>
</body>

</html>