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
      <a class="navbar-brand js-scroll-trigger" href="index.php" style="color:white"><img src="img/favicon.png"> SRI LANKA EDUCATION MINISTRY <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ADMISSION PORTAL</a>
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
        <h1 class="text-uppercase" style="color: white">Log In</h1>

        <form>
            <div class="form-group">
              <input type="text" class="form-control" size="50" name="NIC" placeholder="Enter NIC Number">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" size="50" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <a href="#" style="color:white">Forgotten Account?</a>
            </div>

            <input type="submit" class="btn" style="background:#FF7F50;border-radius: 0px; padding-right:100px; padding-left:100px">Log In</a>
            <!--<a href="dashboard.php" class="btn" style="background:#FF7F50;border-radius: 0px; padding-right:100px; padding-left:100px">Log In</a>-->
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
