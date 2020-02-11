<?php
include('./connect/BaseModel.php');

$fname = $_POST['fname'];
$lname	 = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$tell = $_POST['tell'];



mysqli_query($conn,"INSERT INTO `user`(`fname`, `lname`, `username`, `password`, `tell`, `Userlevel`, `id`) VALUES ('$fname','$lname','$username','$password','$tell','M',NULL)");


?>
<script>

setTimeout(function(){ 
  
    alert('สมัครสมาชิกสำเร็จ')
    window.location.assign("./index.php")
  
  });


</script>