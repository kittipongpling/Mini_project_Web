<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
 @import url(https://meyerweb.com/eric/tools/css/reset/reset.css);
/* ---------- FONTAWESOME ---------- */
/* ---------- https://fortawesome.github.com/Font-Awesome/ ---------- */
/* ---------- http://weloveiconfonts.com/ ---------- */
/* ---------- ERIC MEYER'S RESET CSS ---------- */
/* ---------- https://meyerweb.com/eric/tools/css/reset/ ---------- */
/* ---------- FONTAWESOME ---------- */
 [class*="fontawesome-"]:before {
	 font-family: 'FontAwesome', sans-serif;
}
/* ---------- GENERAL ---------- */
 * {
	 box-sizing: inherit;
}
 html {
	 box-sizing: border-box;
	 height: 100%;
}
 body {
	 background: #c0c0c0;
	 color: #000;
	 font-family: 'Varela Round', sans-serif;
	 line-height: 1.5;
	 margin: 0;
	 min-height: 100%;
}
 input {
	 background-image: none;
	 border: none;
	 font: inherit;
	 margin: 0;
	 padding: 0;
	 transition: all 0.3s;
}
/* ---------- ALIGN ---------- */
 .align {
	 align-items: center;
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
}
/* ---------- GRID ---------- */
 .grid {
	 margin-left: auto;
	 margin-right: auto;
	 max-width: 90%;
	 width: 400px;
}
/* ---------- LOGIN ---------- */
 #login h2 {
	 background: #f95252;
	 border-radius: 20px 20px 0 0;
	 color: #fff;
	 font-size: 28px;
	 padding: 20px 26px;
}
 #login h2 span[class*="fontawesome-"] {
	 margin-right: 14px;
}
 #login fieldset {
	 background: #fff;
	 border-radius: 0 0 20px 20px;
	 padding: 20px 26px;
}
 #login fieldset p {
	 color: #777;
	 margin-bottom: 14px;
}
 #login fieldset p:last-child {
	 margin-bottom: 0;
}
 #login fieldset input {
	 border-radius: 3px;
}
 #login fieldset input[type="email"], #login fieldset input[type="password"] {
	 background: #eee;
	 color: #777;
	 padding: 4px 10px;
	 width: 100%;
}
 #login fieldset input[type="submit"] {
	 background: #3c7;
	 color: #fff;
	 display: block;
	 margin: 0 auto;
	 padding: 4px 0;
	 width: 100px;
}
 #login fieldset input[type="submit"]:hover {
	 background: #28ad63;
}
 
</style>
</head>
<body>

<body class="align">

  <div class="grid">

    <div id="login">

      <h2><span class="fontawesome-lock"></span>Sign In</h2>

      <form action="./login.php" method="POST">

        <fieldset>

          <p><label for="email">E-mail address</label></p>
          <p><input type="email" id="Username" name="Username" placeholder="mail@address.com"></p>

          <p><label for="password">Password</label></p>
          <p><input type="password" id="Password" name="Password" placeholder="password"></p>

          <p><input type="submit" value="Sign In"></p>

        </fieldset>

      </form>

    </div> <!-- end login -->

  </div>

</body>	
	
</body>
</html>





















<!-- <?php 
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
</html> -->