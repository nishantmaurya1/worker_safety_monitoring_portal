<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "ws_admin");  
 $output = '';  
 if(isset($_POST["camera_id"]))  
 {  
      if($_POST["camera_id"] != '')  
      {  
           $sql = "SELECT * FROM cameras WHERE camera_id = '".$_POST["camera_id"]."'";  
      }  
      else  
      {  
           //$sql = "SELECT * FROM cameras";  
      }  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["location"].'</div></div>';  
      }  
      echo $output;  
 }  
 ?>  