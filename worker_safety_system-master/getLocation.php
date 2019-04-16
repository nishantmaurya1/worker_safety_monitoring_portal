<?php
$dbValue=$_POST['h'];
 //$dbValue = Session["Test"]=Request.Form["h"]+"";
$ajax = false;
//$dbValue = "Camera01"; //or the default value of your choice - matched to the default selection value of the dropdown
if(isset($_GET['action']) && $_GET['action'] == 'ajax' && isset($_GET['dd'])) 
{
    $dbValue = intval( $_GET['dd'] );
    $ajax = true;   
}
define('DB_SERVER1', 'localhost:3306');
define('DB_USERNAME1', 'root');
define('DB_PASSWORD1', '');
define('DB_DATABASE1', 'ws_admin');

$conn =mysqli_connect(DB_SERVER1,DB_USERNAME1,DB_PASSWORD1,DB_DATABASE1);
//mysql_select_db("ws_admin",$conn);
$sql = "SELECT * FROM cameras WHERE cam = '" . mysqli_escape_string($conn,$dbValue) . "'";
$res = mysqli_query($conn, $sql);
$dataTable = '';
while($data = mysqli_fetch_assoc($res))
{
    $dataTable =$data['location']; 
    session_start();
    $_SESSION['location']=$dataTable;
    header("Location:monitor.php");
    
}
//if($ajax) echo $dataTable;
mysqli_close($conn);
?>