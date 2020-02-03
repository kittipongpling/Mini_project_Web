
<?php
include('../connect/BaseModel.php');

$name = $_POST['name'];
$lname = $_POST['lname'];
$num = $_POST['rich'];

if(isset($_POST["avatar_upload"])){
    $verifyimg = getimagesize($_FILES['image']['tmp_name']);
// print_r($verifyimg);
    // if($verifyimg['mime'] == 'image/JPG') {
    //     // print "<pre>";
    //     // print_r($verifyimg);
    //     // print "</pre>";
    //     echo "Only PNG images are allowed!";
    //     exit;
    // }    

    $uploaddir = './members/3';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
   
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.<br>";
       
        mysqli_query($conn,"INSERT INTO total( fname, lname, num, files) VALUES ('$name', '$lname', '$num', '$uploadfile')");

    } else {
        echo "Possible file upload attack!<br>";
    }
    
    echo '<pre>';
    echo 'info:';
   print_r($_FILES);
    print "</pre>";
}

?>
<script>

setTimeout(function(){ 
  
     
    window.location.assign("./show.php")
  
  }, 2000);


</script>