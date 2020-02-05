<?php
include('./../../connect/BaseModel.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$tell = $_POST['tell'];
$Userlevel = $_POST['Userlevel'];



       
        // mysqli_query($conn,"INSERT INTO total( fname, lname, num, files) VALUES ('$name', '$lname', '$num', '$uploadfile')");
        mysqli_query($conn,"INSERT INTO `user`(
            `fname`,
            `lname`,
            `username`,
            `password`,
            `tell`,
            `Userlevel`
        )
        VALUES('$fname', '$lname', '$username', '$password', '$tell', '$Userlevel')
        ");


?>
<script>

setTimeout(function(){ 
  
    alert('เพิ่มสมาชิกสำเร็จ')
    window.location.assign("./select_user.php")
  
  }, 1000);


</script>