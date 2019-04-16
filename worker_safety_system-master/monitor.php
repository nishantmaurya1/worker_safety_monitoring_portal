<html>
  <head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#loading').show();  
$('#load_results').load('worker.php', function() {$('#loading').hide();}).fadeIn("slow");
}, 3000); // refresh every 10000 milliseconds

$("a.detail1").on("click", function() {
  var share_link = $(this).prop('href');
  console.log(share_link);
window.open(share_link, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");

});
</script>


  <?php include 'header.php';?>
  <div id="loading">
<center><img src="images/small-loading.gif" /></center></div>
<div id="load_results">
</div>

<body>
</html>

