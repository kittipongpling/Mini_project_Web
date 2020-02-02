<?php
//1. เชื่อมต่อ database: 
include('../connect/BaseModel.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลัก
if($_GET["id"]==''){ 
echo "<script type='text/javascript'>"; 
echo "alert('Error Contact Admin !!');"; 
echo "window.location = 'showmember.php'; "; 
echo "</script>"; 
}
 
//รับค่าไอดีที่จะแก้ไข
$id = mysqli_real_escape_string($conn,$_GET['id']);
 
//2. query ข้อมูลจากตาราง: 
// SELECT * FROM `total` WHERE `id`='23'
$sql = "SELECT * FROM total WHERE id='$id' ";
// $sql = "SELECT * FROM tb_member WHERE id='$id' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

// print_r($result);
foreach($result as $data){
    // echo $data['id'];
    
    // echo $data['lname'];
    // echo $data['num'];
    // echo $data['lname'];

?>

<div class="collapse" id="upload_avatar">
    <div class="card card-body">
        <form enctype="multipart/form-data" action="./update_now.php" method="post">
            <p class="text-left">Upload Avatar:</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
            <input type="text" name="name" require value="<?php echo $data['fname']; ?>"><br>
<input type="text" name="lname" require value="<?php echo $data['lname']; ?>"><br>
<input type="text" name="rich" require value="<?php echo $data['num']; ?>"><br>
            <input name="image" type="file"  /><br>
            <button class="form-control mr-sm-2 btn btn-outline-success my-2 my-sm-0" type="submit" name="avatar_upload" aria-controls="collapse_upload_avatar">
                แก้ไข
            </button>
           <button onclick="move()">กลับ</button>
        </form>
    </div>
</div>
<?php }?>
<script>

function move(){
    window.location.href("./show.php")
}



</script>