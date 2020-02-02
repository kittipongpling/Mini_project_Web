<?php
// $conn = new mysqli("127.0.0.1", "root", "", "mini_project_web");

session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("./connect/BaseModel.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = $_POST['Password'];
				//query 
                  // $sql="SELECT * FROM User Where Username='".$Username."' and Password='".$Password."' ";
 
                  $sql="SELECT * FROM User Where email='$Username' AND password='$Password' ";
 
                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);
                      // $_SESSION["UserID"] = $row["ID"];
                      $_SESSION["User"] = $row["fname"]." ".$row["lname"];
                      $_SESSION["Userlevel"] = $row["Userlevel"];
 
                      if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                        Header("Location: Mini_project_Web/../test/show.php");
 
                      }
 
                      if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: Mini_project_Web/../test/user.php");
 
                      }
 
                  }else{
                    
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
 
        }else{
 
 
            //  Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>