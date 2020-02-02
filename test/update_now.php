<?php
include('../connect/BaseModel.php');
$name = $_POST['name'];
$lname = $_POST['lname'];
$num = $_POST['rich'];

$id = $_POST['id'];

       
        // mysqli_query($conn,"INSERT INTO total( fname, lname, num, files) VALUES ('$name', '$lname', '$num', '$uploadfile')");
        mysqli_query($conn,"UPDATE total SET fname='$name',lname='$lname',num='$num' WHERE id='$id'");


?>
<script>

setTimeout(function(){ 
  
     
    window.location.assign("./show.php")
  
  }, 2000);


</script>