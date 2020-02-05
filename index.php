<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./d.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <title>login</title>
</head>
<body>
        <h1>ร้านค้าออนไลน์</h1>
            <div class="info"><a  target="_blank"><p>เพราะเรา พร้อมที่จะดูแลคุณ<i class="fa fa-heart"></i></p></a></div>
          
        <div class="content">
            <div class="container">
                
                <img width="1100px" class="bg-img" src="https://images.pexels.com/photos/34577/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                
                <div class="menu">
                        <a href="#connexion" class="btn-connexion"><h2>SIGN IN</h2></a>
                        <a href="#enregistrer" class="btn-enregistrer active"><h2>SIGN UP</h2></a>
                    </div>
                    <form action="./login.php" method="POST">
                    <div class="connexion">
                        <div class="contact-form">
                            <label>USERNAME</label>
                            <input placeholder="Username" name="Username" type="text">
                            
                            <label>PASSWORD</label>
                            <input placeholder="Password" name="Password" type="text">
                            
                            <div class="check">
                                <label>				
                                    <input id="check" type="checkbox" class="checkbox">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
                                            <path class="path-back"  d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                                            <path class="path-moving" d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                                        </svg>
                                </label>
                                <h3>Keep me signed in</h3>
                            </div>
                            
                            <input class="submit" value="SIGN IN" type="submit">
                        </div>
                        
                        <hr>
                        <a href="#" target="_blank"><h4>Forgot password?</h4></a>
                    </div>
                    </form>
					<form action="./register_upload.php" method="POST">
                    <div class="enregistrer active-section">
                        <div class="contact-form">
                            <label>ชื่อ</label>
                            <input name="fname" placeholder="" type="text">
                            
                            <label>นามสกุล</label>
                            <input name="lname" placeholder="" type="text">	
                            
                            <label>Username</label>
                            <input name="username" placeholder="" type="text">
                            
                            <label>Password</label>
                            <input name="password" placeholder="" type="text">
                            
                            <div class="check">
                                <label>				
                                    <input id="check" type="checkbox" class="checkbox">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
                                            <path class="path-back"  d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                                            <path class="path-moving" d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                                        </svg>
                                </label>
                                <h3>I agree</h3>
                            </div>
                            
                            <input class="submit" value="SIGN UP" type="submit">	
                                
                        </div>
                    </div>
					</form>
                    
            </div>
        
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script>
        
$('.btn-enregistrer').click(function() {
  $('.connexion').addClass('remove-section');
	$('.enregistrer').removeClass('active-section');
  $('.btn-enregistrer').removeClass('active');
  $('.btn-connexion').addClass('active');
});

$('.btn-connexion').click(function() {
  $('.connexion').removeClass('remove-section');
	$('.enregistrer').addClass('active-section');	
  $('.btn-enregistrer').addClass('active');
  $('.btn-connexion').removeClass('active');
});


        </script>
</body>
</html>


<!-- 
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
          <p><button><a href="./register.php">Register</a></button></p>

        </fieldset>

      </form>

    </div> 

  </div>

</body>	
	 -->

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