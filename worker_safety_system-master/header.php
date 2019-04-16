<?php 
	session_start();
    if ($_SESSION["Login"]!== "YES") 
        {
         // sleep(5);    //if i don't wanna show this page's content to user.
          header('location:authenticate.php');
        }  
    $connect = mysqli_connect("localhost:3306", "root", "", "ws_admin");  
    function fill_brand($connect)  
      {  
              $output = '';  
              $sql = "SELECT * FROM cameras";  
              $result = mysqli_query($connect, $sql);  
              while($row = mysqli_fetch_array($result))  
                    {  
                        $output .= '<option value="'.$row["camera_id"].'">'.$row["cam"].'</option>';  
                    }  
        return $output;  
      }  
     function fill_product($connect)  
       {  
             $output = '';  
             if(isset($_POST["submit"]))
                    {
                        $cam_id=$_POST['camera'];
     
                        $sql = "SELECT * FROM cameras where camera_id='" . mysqli_escape_string($connect,$cam_id) . "'";  
                        $result = mysqli_query($connect, $sql);  
                        while($row = mysqli_fetch_array($result))  
                                  {  
                                    //$output .= '<div class="col-md-3">';  
                                    //$output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["location"].'';  
                                  // $output .=     '</div>';  
                                  // $output .=     '</div>';  
                                  $output .='<b>'.$row["cam"].'&nbsp;<img src="images/online.png" />&nbsp;| &nbsp;</b>Camera Location : <b>'.$row["location"].'</b>';   
                                    
                                  }
                     }
              else
                      {
                        $output .='-- &nbsp;<img src="images/online.png" />&nbsp;| &nbsp;Location : --'; 
                      } 
     
        return $output;  
      }  
      function display($connect)  
        {  
              $output = '';  
              if(isset($_POST["submit"]))
                    { 
                          $cam_id=$_POST['camera'];
                            $sql = "SELECT * FROM cameras where camera_id='" . mysqli_escape_string($connect,$cam_id) . "' ";  
                            $result = mysqli_query($connect, $sql);  
                            while($row = mysqli_fetch_array($result))  
                            {  
                              //$output .= '<div class="col-md-3">';  
                              //$output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["location"].'';  
                            // $output .=     '</div>';  
                            // $output .=     '</div>';  
                            $output.=$row["cam"];
                                
                            }  
                  
                      }
                else
                  {
                    $output.="No";
                  }   
          return $output;
         }  
 ?>  
 <html>
    <head>
        <title>Tracker | Worker Safety</title>
        <meta name="viewport" content="width=device-width , initial-scale=1"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <script src="scripts/jquery 1.8.3.js"></script>  
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="scripts/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="styles/mystyle.css" >
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </head>
  <body>
    
        <div class="container-fullwidth">
               <div class="page-header">
                     <nav class="navbar navbar-default navbar-dark" style="margin:24px 0;">
                            <div class="container-fluid">
                                   <div class="navbar-header">
                                        <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="logo"></a>
                                        <ul class="nav navbar-nav navbar-left">
                                            <li><a href="#"><div class="colorr"><h4>Worker Safety Compliance Monitoring and Controlling</h4></div></a></li>
                                        </ul>
                                    </div>
                                    <ul class="nav navbar-nav navbar-right">
                                        <!-- <li><a href="#"><div class="colorr"><h4>Customers</h4></div></a></li>
                                        <li><a href="#"><div class="colorr"><h4>Orders</h4></div></a></li> -->
                                        <li><a href="#"><div class="colorr"><h4>About</h4></div></a></li>
                                    </ul>
                                    <ul>
                                      <li> <a href="logout.php"><button type="button" class="btn btn-light navbar-btn" ><h4>Logout</h4></button></a></li>
                                    </ul>
                             </div>
                      </nav>   
                </div> 
        </div>
        <div class="row">
             <div class="col-md-4">        
                  <form method="post" action=<?php echo $_SERVER['PHP_SELF'];?>>
                      <h4>Select Camera :
                              <select class="dropdown_select" name="camera" id="camera">  
                              <?php echo fill_brand($connect); ?>  
                      </h4>
                              </select>  
                              <input type="submit" name="submit" value="Go"/>
                  <form>
             </div>              
             <div class="col-md-8" id="show_camera">  
                  <h4 style="font-family:courier;font-size:20px">Current Camera : 
                  <?php echo fill_product($connect);$_SESSION["Camera"]=display($connect);?>  
            </div>
        </div>
        <hr>
