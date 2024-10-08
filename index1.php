<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MenjongCareUnit</title>

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="style2.css">


    
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
    .card{
    background: #f8f9fa;
    border-top-left-radius: 5% 5%;
    border-bottom-left-radius: 5% 5%;
    border-top-right-radius: 5% 5%;
    border-bottom-right-radius: 5% 5%;
}

  </style>
  <body style="background: whith; background-size: cover;">
  <nav
      class="navbar navbar-expand-lg navbar-light fixed-top"
      id="mainNav"
      style="
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.7);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      "
    >
    <div class="container">
      <a draggable="false" class="navbar-brand js-scroll-trigger" href="/HMS" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;">
      <img draggable="false" class="logo-img" src="img/logo.png" alt="Logo Image" style="width:150px; height:50px" width="100px" height="50px"/>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="index.php" style="font-family: 'IBM Plex Sans', sans-serif;">
            <h6 style="font-weight: 900; font-size:18px">HOME</h6>

            </a>
          </li>
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="font-family: 'IBM Plex Sans', sans-serif;">
              <h6 style="font-weight: 900; font-size:18px">ABOUT US</h6>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="font-family: 'IBM Plex Sans', sans-serif;">
              <h6 style="font-weight: 900; font-size:18px">CONTACT</h6>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">

      
         <div class="col-md-7" style="padding-left: 180px; ">
          <div class="col-md-3 register-left" style="margin-top: 20%;right: 15%">
            <img src="img/hero.jpg" alt="Hero Image" style="width:500px; height:500px;" />
          </div>

         </div>

         <div class="col-md-4" style="margin-top: 5%;right: 8%">
          <div class="card" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div class="card-body">
              <center>
                <br>
              <h3 style="margin-top: 10%">Patient Login</h3><br>
              <form class="form-group" method="POST" action="func.php">
              <div class="row" style="margin-top: 10%; display: flex; justify-content: center; align-items: center;">
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <div style="margin-bottom: 20px; display: flex; align-items: center;">
                        <label style="margin-right: 38px;">Email:  </label>
                        <input type="text" name="email" class="form-control" placeholder="Enter email" required style="width: 300px;"/>
                    </div>
                    
                    <div style="display: flex; align-items: center;">
                        <label style="margin-right: 10px;">Password:</label>
                        <input type="password" class="form-control" name="password2" placeholder="Enter password" required style="width: 300px;"/>
                    </div>
                </div>
            </div>

                <div class="row">
                 <div class="col-md-4"  style="padding-left: 363px;margin-top: 10%">
                    <center><input type="submit" id="inputbtn" name="patsub" value="Login" style="
                              padding: 10px 20px;
                              background-color: #03C9D7; /* Green background */
                              color: white; /* White text */
                              border: none; /* No border */
                              border-radius: 5px; /* Rounded corners */
                              font-family: 'IBM Plex Sans', sans-serif; /* Custom font */
                              font-size: 16px; /* Font size */
                              cursor: pointer; /* Pointer cursor on hover */
                              transition: background-color 0.3s ease-in-out; /* Smooth transition */
                                        "></center></div>           
                 <!--  <div class="col-md-8" style="margin-top: 10%">
                    <a href="index.php" class="btn btn-primary">Back</a></div> -->
                </div>
              </form>
            </center>
            </div>
          </div>
        </div>


      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
