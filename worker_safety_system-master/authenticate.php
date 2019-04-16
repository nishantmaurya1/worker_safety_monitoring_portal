<?php
session_start();
?>
<html>
    <head>
        <title>Login | Worker Safety</title>
        <meta name="viewport" content="width=device-width , initial-scale=1"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="styles/mystyle.css" >
    </head>
    <body>
            <div class="container-fullwidth">
                    <div class="page-header">
                                
                            <nav class="navbar navbar-default navbar-dark" style="margin:24px 0;">
                                    <div class="container-fluid">
                                      <div class="navbar-header">
                                        <a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="logo"></a>
                                        <ul class="nav navbar-nav navbar-left">
                                            <li><a href="#"><div class="colorr"><h4>Worker Safety</h4></div></a></li>
                                        </ul>
                                      </div>
                                      <ul class="nav navbar-nav navbar-right">
                                        <!-- <li><a href="#"><div class="colorr"><h4>Customers</h4></div></a></li>
                                        <li><a href="#"><div class="colorr"><h4>Orders</h4></div></a></li> -->
                                        <li><a href="#"><div class="colorr"><h4>About</h4></div></a></li>
                                        <li><a href="#"><div class="colorr"><h4>Login</h4></div></a></li>
                                       
                                      </ul>
                                      </div>
                                    </div>
                                  </nav></div></div>
                    
                    <div class="container">
                    <div class="col-lg-8"><br><br><br><br><br><br><br><br>
                    <h2><span class="glyphicon glyphicon-lock"></span> Login</h2>
    <form  action ="check.php" method = "post" class="form-horizontal">
    <div class="form-align">
        <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
        <div class="col-md-4">
    <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
       </div>
      </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-md-4">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
       
      </div></div>
    
      <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-4">
              <button type="submit" class="btn btn-primary" onclick>Login</button>
            </div>
          </div>  </div>
           
                 <span style='padding: 0 30px 0 50px;color: #999;max-height: 0;transition: 0.28s;overflow: shown;color: red;font-style: italic;'>
                  <?php if(!empty($_SESSION["error"])) { echo $_SESSION["error"]; } ?>
                  </span>
              
    
      </form>
      </div>
      <div class="col-lg-4"></div>
      </div>
                                       
    </body>
</html>
<?php
    unset($_SESSION["error"]);
?>