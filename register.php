<?php
include('./api/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sri Lanka Education Ministry Admission Portal</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>


  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php" style="color:white"><img src="img/logo.png"> SRI LANKA EDUCATION MINISTRY <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ADMISSION PORTAL</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="findschools.php">Find Schools</a>
          </li>
        
          <li class="nav-item">
              <a href="login.php" class="btn btn-success js-scroll-trigger">Log In</a>

            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex align-items-center" style="height:80%">
      <div class="mx-auto text-center">
        <h1 class="text-uppercase" style="color: white">Create Account</h1>

        <form>
                <div class="form-group">
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" name="first_name" size="25" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" class="form-control" name="last_name" size="25" placeholder="Last name">
              </div>
            </div>
            </div>
            
            <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="NIC" size="25" placeholder="NIC">
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="phone" size="25" placeholder="Phone Number">
                </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="email" class="form-control" name="email" size="25" placeholder="Email">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="address" size="25" placeholder="Address">
                </div>
            </div>
            </div>

            <div class="form-group">
            <div class="row">
                <div class="col">
                    <input type="password" class="form-control" name="password" size="25" placeholder="Password">
                </div>
                <div class="col">
                    <input type="password" class="form-control" size="25" placeholder="Confirm Password">
                </div>
            </div>
            </div>


            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
                <label class="form-check-label" for="exampleCheck1" style="color: white">I Read and Agree to the Regulatory Compliances</label>
            </div>
            
            <button type="submit" class="btn" style="background:#FF7F50;border-radius: 0px; padding-right:100px; padding-left:100px">Submit</button>

        </form>

      </div>
    </div>
  </header>

 
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {

        // EDIT HERE

        $('form').submit(function(e) {
          e.preventDefault();
          console.log($('form').serializeObject());
          $.ajax({
            method: 'POST',
            url: 'url',
            data: $('form').serializeObject()
          })
          .done(function(response) {
            alert( "Saved: " + response);
          });
          
        });
      });

      $.fn.serializeObject = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
          if (o[this.name]) {
            if (!o[this.name].push) {
              o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
          } else {
            o[this.name] = this.value || '';
          }
        });
        return o;
      };
    </script>
</body>

</html>
