<?php
include('./connect/BaseModel.php');

$fname = $_POST['fname'];
$lname	 = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$tell = $_POST['tell'];
$Userlevel = $_POST['Userlevel'];

mysqli_query($conn,"INSERT INTO `user`(`fname`, `lname`, `email`, `password`, `tell`, `Userlevel`) VALUES 
('$fname', '$lname', '$email', '$password', '$tell', '$Userlevel')");


?>
<script>

setTimeout(function(){ 
  
    alert('สมัครสมาชิกสำเร็จ')
    window.location.assign("./index.php")
  
  });


</script>