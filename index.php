<?php 
date_default_timezone_set("Asia/Bangkok"); 

if(!isset($_REQUEST['Product'])){
    $_REQUEST['Product'] = "login";
}
$Product = $_REQUEST['Product'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Miniproject Web</title>
</head>
<body>
<?php

 if($Product=="login"){
    require_once("./login.php"); 
}

elseif($Product=="insert"){
    require_once("views/"); 
}else{
    require_once("./login.php"); 
}
?>
</body>
</html>