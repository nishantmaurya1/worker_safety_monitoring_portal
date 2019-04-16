<?php   
 //load_data_select.php  
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
      $sql = "SELECT * FROM cameras";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
          // $output .= '<div class="col-md-3">';  
           //$output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["location"].'';  
           //$output .=     '</div>';  
         //  $output .=     '</div>';  
      }  
      return $output;  
 }  
 ?>  
 
 <!DOCTYPE html>  
 <html>  
      <head>  
            
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3>  
                     <select name="camera" id="camera">  
                     <option value="">Show All Product</option>  
                          <?php echo fill_brand($connect); ?>  
                     </select>  
                     <br /><br />  
                     <div class="row" id="show_camera">  
                          <?php echo fill_product($connect);?>  
                     </div>  
                </h3>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#camera').change(function(){  
           var camera_id = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{camera_id:camera_id},  
                success:function(data){  
                     $('#show_camera').html(data);  
                }  
           });  
      });  
 });  
 </script>  