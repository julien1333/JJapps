<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

error_reporting(0);

  $msg = "";
 
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "image/".$filename;
         
    $db = mysqli_connect("localhost", "root", "", "photos");
 
        // Get all the submitted data from the form
        $sql = "INSERT INTO image (filename) VALUES ('$filename')";
 
        // Execute query
        mysqli_query($db, $sql);
         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($db, "SELECT * FROM image");
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" type="image/gif/jpg" href="logo.jpg">
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <style>
      .box-1 {
      position: absolute;
      width: 60px;
      height: 60px;
      background: none;
      border: 2px solid darkblue;
      top: 10%;
      left: 15%;
      z-index: -1;
      transform: rotate(60deg);
}

.box-2 {
      position: absolute;
      width: 120px;
      height: 120px;
      background: none;
      border: 2px solid darkblue; 
      top: 54%;
      left: 18%;
      z-index: -1;
      transform: rotate(-110deg);
}

.box-3 {
      position: absolute;
      width: 80px;
      height: 80px;
      background: none;
      border: 2px solid darkblue;
      top: 28%;
      left: 82%;
      z-index: -1;
      transform: rotate(30deg);
}
@media(max-width: 900px) {

      .title-1, .title-2 {
            font-size: 50px;
      }

      .title-1 {
            left: 20%;
            top: 40%;
      }

      .title-2 {
            left: 50%;
            z-index: 1;
      }

      .menu {
            display: none;
      }

      .content p {
            display: none;
      }

      .box-2 {
            top: 70%;
      }

      .content button {
            position: fixed;
            right: 3em;
            bottom: 4em;
            z-index: 1;
      }
}
        body{ font: 18px sans-serif; text-align: center; }
		a:active {
			  font-size:21px;
              font-family:"MV Boli";
              color: red;
              text-transform: uppercase;
			  font-weight: bold;
         border: 3px solid black;
  border-radius: 3px;
			  
		}
		a {
  background:
     linear-gradient(
       to right,
       var(--mainColor) 0%,
       var(--mainColor) 5px,
       transparent 60px
     
  background-repeat: repeat-x;
  background-size: 100%;
  color: red;
  padding-left: 18px;
  text-decoration: none;
  font-weight : bold;
}

a:hover{
  background:
     linear-gradient(
       to right,
       var(--mainColor) 5%,
       var(--mainColor) 10px,
       transparent
     );

}
:root {
  --mainColor:red;
}

body {


  font-family: 'Montserrat', sans-serif;
  font-size: 1em;
  height: 100vh;
  
}

		
        
		p {
			  font-size:larger;
              font-family:"Courier New", Courier, monospace;
              color: black;
              text-transform: uppercase;
			  font-weight: bold;
		}
    h2 {
		font-weight:bold;
		  font-family: "OCR A Std", monospace;
		color : red;
		font-size:50px;
		text-transform:capitalize;
}
    #new4 {
         border: 1px solid red;
        }
	h1 {
			font-weight:bold;
      color:red;
		}
    b{
      color: red;
    }
		
	button {
  background: none;
  border: 2px solid;
  font: inherit;
  line-height: 1;
  margin: 0.5em;
  padding: 1em 2em;
}
.slide:hover,
.slide:focus {
  box-shadow: inset 6.5em 0 0 0 var(--hover);
}
$colors: {
   
  slide: #8fc866
 
}
.hvr-bounce-to-right {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
}
.hvr-bounce-to-right:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #2098D1;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-bounce-to-right:hover, .hvr-bounce-to-right:focus, .hvr-bounce-to-right:active {
  color: white;
}
.hvr-bounce-to-right:hover:before, .hvr-bounce-to-right:focus:before, .hvr-bounce-to-right:active:before {
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
  -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
}
span {
  content: "\2718";
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}



.wrapper {
  min-height: 100vh;
  width: 100%;
  max-width: 50rem;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

date{
	position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}
h2 {

color:red;
  }


    </style>

</head>
<body>
<Body background="wallpaper.jpg">
   <div class="wrapper">
            <div class="pattern"></div>

            <div class="nav">
                  <div class="logo"></div>

      
                  
            </div>
<div class="box-1 box"></div>
            <div class="box-2 box"></div>
            <div class="box-3 box"></div>
<hr>

    <h2 class="my-5">Hey,</h2> <h1><i><b><span style="color: red;"><?php echo htmlspecialchars($_SESSION["username"]); ?>
</b></span></h1></i><br> <ul class="wrapper">
 
    <h2>Welcome To Your Account ! !</h2>

</ul>
<hr>
<br>
<i><b><strong><u><span id="date"></span><strong></u></b></i>
<b><script>
document.getElementById("date").innerHTML = Date();
</script></b></strong></u>
	<hr class="new4">
	  <body>
        <div id="wrapper">
            <div id="menu">
                <h2><u><p class="welcome"> </h2></u></p>
              
            </div>
 
            <div id="chatbox"></div>
 
<body>
<div class="hvr-bounce-to-right">
  <hr >
  <div>
  <img src="/login/chat.jpg" height="60px">
  </div>
<b><a href="\login\chat\index.php" >Chatting Webapp (CHAT NOW !!)</a></b>
  <hr>
  <div>
 <img src="/login/calculator.jpg" height="60px">
 </div>
<a href="\login\calculator\calculator.php">Calculator</a> 
 
<hr>
  <br>
  <div>
   <img src="/login/hotel.jpg" height="60px"> 
   </div>
  <a href="\login\hotel booking\index.php">Hotel Booking System (BOOK NOW !!)</a>
  <hr>
  <br>
  <div>
   <img src="/login/shopping.png" height="60px">
   </div>
  <a href="\login\shopping\index.php">Shopping Store (SHOP NOW !!)</a>
  <hr>
  
  <div>
   <img src="\login\BeirutCityWebsite\bclogo.jpg" height="60px"> 
   </div>
   
  <a href="\login\BeirutCityWebsite\index.html">Beirut City Website (Access Pass:beirut961)</a>
</form>

</body>
 
</html>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document
            $(document).ready(function () {});
        </script>
    </body>
	
	<br><br><hr>
  <br>
  <br>
    
       <a href="reset-password.php" class="btn btn-warning"><b>Reset Your Password</a></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="logout.php" color="red" class="btn btn-danger ml-3"><b>Sign Out of Your Account</a></b>
    
</body>
 <script type="text/javascript">

            TweenMax.to(".title-1", 2, {
            x: 30,
            opacity: 1,
            ease: Expo.easeInOut
            });

            TweenMax.to(".title-2", 2, {
            delay: 0.2,
            x: -80,
            opacity: 1,
            ease: Expo.easeInOut
            });

            TweenMax.from(".runner", 2, {
            delay: 1.6,
            x: -80,
            opacity: 0,
            ease: Expo.easeInOut
            });

            TweenMax.from(".box-1", 4, {
            delay: 1,
            rotation: 200,
            transformOrigin: "50% 50%",
            opacity: 0,
            x: -180,
            ease: Expo.easeInOut
            });

            TweenMax.from(".box-2", 4, {
            delay: 1.2,
            rotation: 90,
            transformOrigin: "50% 50%",
            opacity: 0,
            x: -180,
            ease: Expo.easeInOut
            });

            TweenMax.from(".box-3", 4, {
            delay: 1,
            rotation: 180,
            transformOrigin: "50% 50%",
            opacity: 0,
            x: -180,
            ease: Expo.easeInOut
            });

            TweenMax.from(".pattern", 2, {
            delay: 0.8,
            width: 0,
            opacity: 0,
            ease: Expo.easeInOut
            });

            TweenMax.from(".logo", 2, {
            delay: 1.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
            });

            TweenMax.staggerFrom(".menu ul li", 2, {
            delay: 1.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      }, 0.1);

            TweenMax.from(".cart", 2, {
            delay: 1.7,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
            });

            TweenMax.staggerFrom(".media ul li", 2, {
            delay: 2,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      }, 0.1);

            TweenMax.from(".content p", 2, {
            delay: 2.4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
            });

            TweenMax.from(".content button", 2, {
            delay: 2.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
            });

      </script>
     <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-dffe64d0-e2fd-49a0-9e02-cb1cf56ff63a"></div>
</html>