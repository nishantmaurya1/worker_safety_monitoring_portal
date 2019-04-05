<html>

<head>
</head>
<body>
<?php
		session_start();
    if ($_SESSION["Login"]!== "YES") 
        {
         
         // sleep(5);    //if i don't wanna show this page's content to user.
          header('location:authenticate.php');

        }  


  //  elseif ($_SESSION["Login"]!== "NO") 
     // {
       //    header('location:monitor.php');   
          
    //  }

    ?>
   </body>
   </html>