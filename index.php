<html>
<head>
	<title>MenjongCareUnit</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->


<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style >
     .form-control {
        border-radius: 0.75rem;
    }
    .glassy-effect {
        background-color: white; /* Solid white background */
        border-radius: 10px; /* Rounded corners */
        padding: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Soft shadow around the form */
        border: 1px solid rgba(0, 0, 0, 0.1); /* Light border for subtle effect */
    }
</style>

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>

</head>

<!------ Include the above in your HEAD tag ---------->
<body>
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
                        <img draggable="false" class="logo-img" src="img/logo.png" alt="Logo Image"/>
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

	


  <div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="row">
                    <div class="col-md-3 register-left" style="margin-top: 10%;right: 5%">
                        <img src="img/hero.jpg" alt="Hero Image"/>
                    </div>
                    <div class="col-md-9 " style="margin-top: 10px;left: 80px;">
                      
                
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%; padding:5px; background:#03C9D7;">
                            <li class="nav-item">
                                <a class="nav-link active" style="color:black; border:1px solid #03C9D7;" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:black; border:1px solid #03C9D7;" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:black; border:1px solid #03C9D7;" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a>
                            </li>
                        </ul>
                      
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              
                                <form method="post" action="func2.php">
                                <h3 class="register-heading" style="margin-top:36px">Register as Patient</h3>
                                <div class="row register-form glassy-effect" style="width: 100%;">
                                           
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                            <a href="index1.php">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword"  onkeyup='check();' required/><span id='message'></span>
                                        </div>
                                        <input type="submit" name="patsub1" onclick="return checklen();" value="Register" 
                                        style="
                                            padding: 10px 20px;
                                            background-color: #03C9D7; /* Green background */
                                            color: white; /* White text */
                                            border: none; /* No border */
                                            border-radius: 5px; /* Rounded corners */
                                            font-family: 'IBM Plex Sans', sans-serif; /* Custom font */
                                            font-size: 16px; /* Font size */
                                            cursor: pointer; /* Pointer cursor on hover */
                                            transition: background-color 0.3s ease-in-out; /* Smooth transition */
                                        "/>
                                    </div>

                                </div>
                            </form>
                            </div>

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form method="post" action="func1.php">
                                <h3 class="register-heading" style="margin-top:36px">Login as Doctor</h3>
                                <div class="row register-form glassy-effect" style="width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                                        </div>
                                        
                                        <input type="submit" name="docsub1" value="Login"
                                        style="
                                            padding: 10px 20px;
                                            background-color: #03C9D7; /* Green background */
                                            color: white; /* White text */
                                            border: none; /* No border */
                                            border-radius: 5px; /* Rounded corners */
                                            font-family: 'IBM Plex Sans', sans-serif; /* Custom font */
                                            font-size: 16px; /* Font size */
                                            cursor: pointer; /* Pointer cursor on hover */
                                            transition: background-color 0.3s ease-in-out; /* Smooth transition */
                                        "/>
                                    </div>
                                </div>
                            </form>
                            </div>


                            <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <form method="post" action="func3.php">
                                <h3 class="register-heading" style="margin-top:36px">Login as Admin</h3>
                                <div class="row register-form glassy-effect" style="width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                                        </div>
                                        
                                        <input type="submit" name="adsub" value="Login"
                                        style="
                                            padding: 10px 20px;
                                            background-color: #03C9D7; /* Green background */
                                            color: white; /* White text */
                                            border: none; /* No border */
                                            border-radius: 5px; /* Rounded corners */
                                            font-family: 'IBM Plex Sans', sans-serif; /* Custom font */
                                            font-size: 16px; /* Font size */
                                            cursor: pointer; /* Pointer cursor on hover */
                                            transition: background-color 0.3s ease-in-out; /* Smooth transition */
                                        "/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </html>

  
