
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Image Gallery</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>    

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body> 

     <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <center><a class="navbar-brand" href="index.php">Image Gallery</a></center>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a href="login.php" id="logoutbtn">Logout</a>
                    </li>                    
                </ul>
            </div>
                        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

 <div class="row">

    <div class="col-lg-12">
        <h1 class="page-header">Galleries</h1>
    </div>

        <div class="row">  
        <div class="col-lg-4">
            <div class="input-group">
            <input type="text" id="galleryName" class="form-control" placeholder="Add Gallery">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="addGallerybtn">Add</button>
            </span>
            <div id="loader"></div>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    
    <br />   
    <div id="galleriesList" >
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <!-- Dropdown action -->
                <div class="btn-group">
                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="" data-name="Random Photos" data-toggle="modal" data-target="#myModal" data-name="Random Photos" id="editGallerybtn">Edit Name</a></li>
                        <li><a href="" data-galleryname="Random Photos" id="deleteGallerybtn">Delete Gallery</a></li>
                    </ul>
                </div> <!-- End Dropdown action -->
                            <a class="thumbnail" href="photos.php?gallery=Random Photos">
                    <img class="img-responsive" src="default-thumbnail.jpg" alt="">
                    <p>Random Photos</p>
                </a>
                                    
            </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <!-- Dropdown action -->
                <div class="btn-group">
                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="" data-name="Suits Collection" data-toggle="modal" data-target="#myModal" data-name="Suits Collection" id="editGallerybtn">Edit Name</a></li>
                        <li><a href="" data-galleryname="Suits Collection" id="deleteGallerybtn">Delete Gallery</a></li>
                    </ul>
                </div> <!-- End Dropdown action -->
                            <a class="thumbnail" href="photos.php?gallery=Suits Collection">
                    <img class="img-responsive" src="default-thumbnail.jpg" alt="">
                    <p>Suits Collection</p>
                </a>
                                    
            </div>
            </div>
</div> <!-- End row -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Gallery Name</h4>
      </div>
      <div class="modal-body">
        <div class="row">  
        <div class="col-lg-8">
            <div class="input-group">
            <input type="text" id="newGalleryName" class="form-control" placeholder="Add Gallery">
            <input type="hidden" id="oldGalleryName" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="editGalleryModalBtn">Edit</button>
            </span>
            <div id="loader"></div>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
      </div>      
    </div>

  </div>
</div>
<footer>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; JulienJabbour</p>
                </div>
            </div>
			<center><a href="login.php">Logout from all devices</center>
        </footer>
 </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/myscript.js"></script>
  </body>
</html>