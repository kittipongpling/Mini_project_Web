
<?php
include('./../../connect/BaseModel.php');

$name = $_POST['fname'];

$num = $_POST['price'];
echo $_POST["avatar_upload"];
if(isset($_POST["avatar_upload"])){
    $verifyimg = getimagesize($_FILES['image']['tmp_name']);
print_r($verifyimg);
    // if($verifyimg['mime'] == 'image/JPG') {
    //     // print "<pre>";
    //     // print_r($verifyimg);
    //     // print "</pre>";
    //     echo "Only PNG images are allowed!";
    //     exit;
    // }    

    $uploaddir = './../../photo/3';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
   
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.<br>";
       
        mysqli_query($conn,"INSERT INTO total( fname, price, files) VALUES ('$name', '$num', '$uploadfile')");

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
  
     
    window.location.assign("./../index_user.php")
  
  });


</script>