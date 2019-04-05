<?php
   include("config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $cryptedpwd=md5($mypassword);

      $sql = "SELECT * FROM authent WHERE username = '$myusername' and password = '$cryptedpwd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      $error="Invalid Credentials, Please Try Again!";
      
		
      if($count == 1)
       {
       //  session_register("myusername");
        // $_SESSION['myusername'] = $myusername;

         session_start();
	       $_SESSION["Login"] = "YES";
         header("location: monitor.php");
       }
      else
       {
         session_start();
        $_SESSION["error"] = $error;
        header("location: authenticate.php"); //gonna send it back to login page
       }
   }
?>