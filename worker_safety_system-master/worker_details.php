<?php
 include("config.php");

$id=$_GET["rfid"];
$sql = "SELECT * FROM workers where rfid='$id'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        // echo "id: " . $row["rfid"]. " - Name: " . $row["name"]."<br>"; 
        ?>
<html>
    <head>
        <title>Tracker | Worker Safety</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="styles/mystyle.css" >
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    </head>
    <body>     
    <div class="col-md-4"></div>   
 <div class="col-md-4">
            <div class="card" style="border-radius:8px;">
            <div class="card-header" style="text-align: center"><h4> Employee Detail </h4></div>
            <div class="card-body bg-primary3">
            <!--<div class="col-md-3"><br><br><center><img src="images/male.png" class="img-responsive" /><center></div>-->
            <div class="col-md-3"><br><br><center><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" class="img-responsive">';?><center></div>
            <div class="col-md-9">
                  <center> <table style="width:100%" class="bg-primary3">
                             <tr> <h4> <th>Name:</th><td><?php echo $row["name"] ?></td></h4></tr>
                             <tr><h4><th>Employee Id:</th><td><?php echo $row["emp_id"] ?></h4></tr>
                             <tr><h4><th>Designation:</th><td><?php echo $row["designation"] ?></h4></tr>
                             <tr><h4><th>Supervisor:</th><td><?php echo $row["supervisor"] ?></h4></tr>
                             <tr><h4><th>RFId:</th><td><?php echo $row["rfid"] ?></h4></tr>
                             <tr><h4><th>Contact No:</th><td><?php echo $row["contact"] ?></h4></tr>
                             <tr><h4><th>Emergency Contact No:</th><td><?php echo $row["emergency_contact"] ?></h4></tr>
                             <tr><h4><th>Address:</th><td><?php echo $row["address"] ?></h4></tr>
                            </table>
                  </center>
            </div>  
 </div></div>
 <div class="col-md-4"></div>                 

<?php
    }
} else {
    echo "0 results"; 
}

mysqli_close($db);
?>