<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/gif/jpg" href="/login/logo.jpg">
        <title>Julien Jabbour Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
		   <style>
a:hover {
  background:
     linear-gradient(
       to right,
       var(--mainColor) 0%,
       var(--mainColor) 5px,
       transparent
     );
}


		   
		a {
			  font-size:larger;
              font-family:"Courier New", Courier, monospace;
              color: blue;
              text-transform: uppercase;
			  font-weight: bold;
			  
		}			  
		</style>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                               <center><h3>You have been logged out.<br> <a href="login.php">Login again?</a></h3></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy Julien Jabbour</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by Julien Jabbour <p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
