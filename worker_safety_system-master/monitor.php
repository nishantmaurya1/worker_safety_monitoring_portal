<html>
  <head>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#loading').show();  
$('#load_results').load('worker.php', function() {$('#loading').hide();}).fadeIn("slow");
}, 3000); // refresh every 10000 milliseconds

function clickme()
    {
    var status = $(this).attr('id');
    alert(status);
}
</script>

  <?php include 'header.php';?>
  <div id="loading">
  <center><img src="images/small-loading.gif" /></center></div>
  <div id="load_results">

 
</div>


  <body>
</html>

