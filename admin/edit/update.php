<?php
include('./../../connect/BaseModel.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$tell = $_POST['tell'];
$Userlevel = $_POST['Userlevel'];

$id = $_POST['id'];

       
        // mysqli_query($conn,"INSERT INTO total( fname, lname, num, files) VALUES ('$name', '$lname', '$num', '$uploadfile')");
        mysqli_query($conn,"UPDATE `user` SET 
        `fname`='$fname',
        `lname`='$lname',
        `username`='$username',
        `password`='$password',
        `tell`='$tell',
        `Userlevel`='$Userlevel' 
        WHERE id='$id'");


?>
<script>

setTimeout(function(){ 
  
     
    window.location.assign("./select_user.php")
  
  }, 1000);


</script>