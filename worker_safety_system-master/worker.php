
<?php
  session_start();
  if($_SESSION["Camera"]=="No")
      {
            echo "Please Select a Camera!";
      }
  else
     {
            $file=$_SESSION["Camera"];
            $url = $file.'.json'; // path to your JSON file
            $data = file_get_contents($url); // put the contents of the file into a variable
            $characters = json_decode($data); // decode the JSON feed

 ?>

            <div class="">
            </div>
            &nbsp;
            <center>
                    <span class="fa fa-user fa-2x" >
                        &nbsp;Workers Detected --  
                            <i style="font-family:courier;">
                                <?php  date_default_timezone_set("Asia/Kolkata"); $timestamp = time(); echo(date("F d, Y h:i:s A", $timestamp)); 
                                ?>
                            </i>
                    <br>
                    <br>
           
            <button class="buttonload" disabled>
                    <i class="fa fa-refresh fa-spin">
                    </i>  
                    Refreshing
            </button></span>
             </center>                            
            <div class="container-full-width">
            <br>                        
            <br>
            <div class="tab-content">
                 <div id="home" class="container tab-pane active">
                 <br>
                 <div class="row">
                      <?php foreach ($characters as $character) : 
                           if ($character->compliance>"40") 
                              {
                      ?>
            
                                  <div class="col-md-3">
                                      <div class="card" style="border-radius:8px;">
                                          <div class="card-header" style="text-align: center">
                                               <h4> 
                                                   <?php echo $character->name;
                                                   ?>
                                               </h4>
                                          </div>
                                          <a href="worker_details.php?rfid=<?php echo $character->rfid;?>" onclick="return !window.open(this.href, 'somesite', 'width=500,height=500')"target="_blank">                          
                                            <div class="card-body bg-primary2" >
                                                <div class="row">
                                                     <div class="col-md-4"><img src="images/male.png" class="img-responsive"  width="180%">
                                                     </div>
                                                     <div class=" col-md-8">
                                                    <center>  <h4>Compliance - <?php echo $character->compliance;?> % <br><br>RFID-1543-<?php echo $character->rfid;?></h4>
                                                    </center>
                                                    </div>  
                                                </div>
                                            </div>
                                         </a>                     
                                     </div>
                                 </div>           
                            
                         <?php 
                              
                               } 
                               else
                               {   
                         ?>

                                <div class="col-md-3">
                                    <div class="card" style="border-radius:8px;">
                                            <div class="card-header" style="text-align: center">
                                                <h4>
                                                    <?php echo $character->name;?>
                                                </h4>
                                            </div>
                                            <a href="worker_details.php?rfid=<?php echo $character->rfid;?>" onclick="return !window.open(this.href, 'somesite', 'width=500,height=500')"target="_blank">  
                                                    <div class="card-body bg-primary1">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <img src="images/male.png" class="img-responsive" width="180%"/>
                                                            </div>
                                                            <div class="quadrat col-md-8" >
                                                                <center><h4>Compliance - <?php echo $character->compliance;?>%<br>RFID-1543-<?php echo $character->rfid;?></h4>
                                                                </center>
                                                            </div>  
                                                        </div>
                                                    </div>
                                            </a>                 
                                    </div>
                                </div>
  <?php
                                  }
                            endforeach;
         }
  ?>


</div>
</div>