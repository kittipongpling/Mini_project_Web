<?php
$conn = new mysqli("127.0.0.1", "root", "", "mini_project_web");

$name = $_POST['name'];
$lname = $_POST['lname'];
$num = $_POST['rich'];
$photo = $_POST['photo'];

// echo $lname;
// echo $num;
// echo $files;

// $ext = pathinfo(basename($_FILES['photo']['name']), PATHINFO_EXTENSION);
// $new_image_name= 'img_'.uniqid().".".$ext;
// $image_path = "images/";
// $upload_path = $image_path.$new_image_name;

// $success = move_uploaded_file($_FILES['photo']['tmp_name'],$upload_path);
// if($success==FALSE){
//     echo "ไม่สามารถ upload";
//     exit();
// }

mysqli_query($conn,"INSERT INTO total( fname, lname, num, files) VALUES ('$name', '$lname', '$num', '$photo')");


?>
<script>

setTimeout(function(){ 
  
     
      history.back();
  
  }, 3000);


</script>