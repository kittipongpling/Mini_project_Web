<?php
include('./connect/BaseModel.php');

$fname = $_POST['fname'];
$lname	 = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];



mysqli_query($conn,"INSERT INTO `user`(`fname`, `lname`, `username`, `password`, `Userlevel`) VALUES 
('$fname', '$lname', '$username', '$password', 'M')");


?>
<script>

setTimeout(function(){ 
  
    alert('สมัครสมาชิกสำเร็จ')
    window.location.assign("./index.php")
  
  });


</script>