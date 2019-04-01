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
                                       <li> <button type="button" class="btn btn-default navbar-btn"><h4>Login</h4></button></li>
                                       
                                      </ul>
                                      </div>
                                    </div>
                                  </nav></div></div>
                    
                    <div class="container">
                    <h2><span class="glyphicon glyphicon-lock"></span>Login</h2>
    <form  action ="check.php" method = "post" class="form-horizontal">
        <div class="form-align">
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-md-4">
    <input type="text" class="form-control" name="username" placeholder="Enter Username">
       </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-md-4">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
       
      </div></div>
      <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-4">
              <button type="submit" class="btn btn-primary" onclick>Login</button>
            </div>
          </div></div>
      </form>
      
                                       
    </body>
</html>
