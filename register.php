<?php

  require_once('dbconfig.php');
  $db = new operations();

 ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EPALM</title> 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"> 
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://kit.fontawesome.com/3b4f2ecc11.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
  </script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
<nav class="nav" id="topbar">
    <div class="logo">
      <a href="index.html"><img src="images/EPALM.png" style="width:80px;height:80px;" ></a>
    </div>
    <div id="mainListDiv" class="main_list">
      <ul class="navlinks">
        <li> <a href="payment.html">Payment</a></li>
        <li> <a href="events.html">Events</a></li>
        <li><a href="register.html">Register</a> </li>
      </ul>
    </div>
</nav>
  <div class="container"></div>
    <div class="py-5 text-center" >

      <h2>Student Registration</h2>
      <p class="lead">Student enter their information for making their profile.</p>
    </div>

    <div class="row">
      <div class="mx-auto col-md-4">
        <h4 class="mb-3">Enter your details</h4>
        <hr class="mb-4"><br>
        <?php $db->Store_Record(); ?>
        <form method="post">
          <div class="row">
            <div class="col-md-8 mb-3">
              <label for="REGISTRATION_NUMBER">Registration Number</label>
              <input type="text" class="form-control" id="REGISTRATION_NUMBER" name="REGISTRATION_NUMBER" placeholder="" value="" required>
            </div>
            <div class="col-md-8 mb-3">
              <label for="FIRST_NAME">First name</label>
              <input type="text" class="form-control" id="FIRST_NAME" name="FIRST_NAME" placeholder="" value="" required>
            </div>
            <div class="col-md-8 mb-3">
              <label for="MIDDLE_NAME">Middle name</label>
              <input type="text" class="form-control" id="MIDDLE_NAME" name="MIDDLE_NAME" placeholder="" value="">
            </div>
            <div class="col-md-8 mb-3">
              <label for="LAST_NAME">Last name</label>
              <input type="text" class="form-control" id="LAST_NAME" name="LAST_NAME" placeholder="" value="" required>
            </div>
          
          <div class="col-md-8 mb-3">
            <label for="MOBILE_NUMBER">Mobile Number</label>
            <input type="tel" class="form-control" id="MOBILE_NUMBER" name="MOBILE_NUMBER" placeholder="">
          </div>
        </div>
            <br>
            
            <h4 class="mb-3">Register your login details</h4>
            <hr class="mb-4"><br>
            <div class="row">
              
            <div class="mb-3 col-md-8">
              <label for="EMAIL">Email </label>
              <input type="Email" class="form-control" id="EMAIL" name="EMAIL" placeholder="you@example.com">
            </div>
            <div class="mb-3 col-md-8">
              <label for="PASSWRD">Password </label>
              <input type="Password" class="form-control" id="PASSWRD" name="PASSWRD" placeholder="New Password ">
            </div>
          </div>
              <center>
                <input type="submit" href="#myModal" name="btn_save" class="trigger-btn btn btn-primary" data-toggle="modal" value="Register"/>
            </center>
        </form>
      </div>
    </div>
    <div id="myModal" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content">
          <div class="modal-header">
            <div class="icon-box">
              <i class="material-icons">&#xE876;</i>
            </div>				
            <h4 class="modal-title w-100">Awesome!</h4>	
          </div>
          <div class="modal-body">
            <p class="text-center">You have been registered.</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">EPALM</p>
      <p class="mb-1">Made with <i class="fas fa-heart"></i> by</p>
      <ul class="list-inline">
        <li class="list-inline-item">Aryan Vats</li>
        <li class="list-inline-item">Arohan Mishra</li>
        <li class="list-inline-item">Aditya Joshi</li>
      </ul>
    </footer>
  </div>
</body>

</html>