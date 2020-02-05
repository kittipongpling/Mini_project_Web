<?php
include('./../../connect/BaseModel.php');
$fname = $_POST['fname'];
$price = $_POST['price'];


$id = $_POST['id'];

       
        // mysqli_query($conn,"INSERT INTO total( fname, lname, num, files) VALUES ('$name', '$lname', '$num', '$uploadfile')");
        mysqli_query($conn,"UPDATE `total` SET 
        `fname`='$fname',
        `price`='$price'
        WHERE id='$id'");


?>
<script>

setTimeout(function(){ 
  
     
    window.location.assign("./select_product.php")
  
  }, 1000);


</script>