<?php


include('./../../connect/BaseModel.php');
$id = mysqli_real_escape_string($conn,$_GET['id']);
$sql = "DELETE FROM `total` WHERE id='$id'";
// $sql = "SELECT * FROM tb_member WHERE id='$id' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
// $row = mysqli_fetch_array($result);
// extract($row);
?>
<script>

setTimeout(function(){ 
  
    alert('ลบข้อมูลสำเร็จ')
    window.location.assign("./select_product.php")
  
  }, 1000);


</script>