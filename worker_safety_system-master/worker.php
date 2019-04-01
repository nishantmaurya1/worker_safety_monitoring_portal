
<?php
$url = 'dummy.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

?>

<div class=""></div>&nbsp;<span class="fa fa-user fa-2x">&nbsp;Workers Detected --  <i><?php  date_default_timezone_set("Asia/Kolkata"); $timestamp = time(); echo(date("F d, Y h:i:s A", $timestamp)); ?> </i></span>
                                  <button class="buttonload" disabled>
                                      <i class="fa fa-refresh fa-spin"></i>  Refreshing
                                    </button>
                            
                                  <div class="container-full-width">
                                    <br/>                        
                                
                                        
                                        <br>


<div class="tab-content">
                                          <div id="home" class="container tab-pane active"><br>
                                            
                                           
                                                <div class="row">

<?php foreach ($characters as $character) : 
    if ($character->compliance>"40") {
    ?>
  
                    <div class="col-md-3">
                           <div class="card" style="border-radius:8px;">
                                <div class="card-header" style="text-align: center">
                                         <h4> <?php echo $character->name;?></h4>
                                  </div>
                                                                
                                      <div class="card-body bg-primary2">
                                             <div class="row">
                                                  <div class="col-md-4"><img src="images/male.png" class="img-responsive"  width="180%">
                                                   </div>
                                                        <div class=" col-md-8">
                                                                <center>  <h4>Compliance - <?php echo $character->compliance;?> % <br><br>RFID-1543-002194</h4>
                                                                </center>
                                                         </div>  
                                              </div>
                                       </div>
                                                              
                                 </div>
                            </div>              
   <?php } else { ?>

                    <div class="col-md-3">
                          <div class="card" style="border-radius:8px;">
                                <div class="card-header" style="text-align: center">
                                      <h4><?php echo $character->name;?></h4>
                                </div>
                                <div class="card-body bg-primary1">
                                    <div class="row">
                                        <div class="col-md-4"><img src="images/male.png" class="img-responsive" width="180%">
                                        </div>
                                        <div class="quadrat col-md-8" >
                                                <center><h4>Compliance - <?php echo $character->compliance;?>%<br>RFID-1543-002194</h4>
                                                </center>
                                        </div>  
                                    </div>
                                </div>
                                                         
                          </div>
                    </div>


	
<?php } endforeach; ?>
</div></div>