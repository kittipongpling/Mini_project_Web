<?php


include('../connect/BaseModel.php');
$id = mysqli_real_escape_string($conn,$_GET['id']);
$sql = "SELECT * FROM `total` WHERE id='$id'";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

$id;
$fname;
$lname;
$num;

foreach($result as $data){
   $id = $data['id'];
   $fname = $data['fname'];
   $lname = $data['lname'];
   $num = $data['num'];
}
echo $id;
echo $fname;
echo $lname;
echo $num;
?>