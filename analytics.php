<?php
include('./api/db.php');
?>
<!DOCTYPE html>

<html>

<head>
  <title>Sri Lanka Education Ministry Admission Portal</title>
  <link rel="shortcut icon" type="image/png" href="/favicon.png" />
  <link rel="stylesheet" href="./css/style.css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body style="background-color:#eee;">
  <div class="container">
    <a href="index.php" style="float: right; color:black;padding-top:10px"><b>Back to Home</b></a>

    <h1 class="text-center" style="padding-top:50px;">School Analytics</h1>
    <br><br>
    <img src="img/analytics.jpg"  class="responsive" style="width:100%">
    <!-- <div class="row">
      <div class="col-4">
        <h4 class="text-center">Submitted Applications</h4>
        <div class="pie"></div>
      </div>

      <div class="col-4">
        <h4 class="text-center">Interview</h4>

        <div class="pie2"></div>
      </div>

      <div class="col-4">
        <h4 class="text-center">Slots Available</h4>
        <div class="container my-4">

          <p class="font-weight-bold">Learn how to create a Bootstrap Pie Chart and see the examples of proper implementation
            and customization.

          </p>

          <p><strong>Detailed documentation and more examples of Charts you can find in our <a href="https://mdbootstrap.com/docs/jquery/javascript/charts/" target="_blank">Bootstrap Charts Docs</a>.</p>

          <hr class="my-4">

          <div>
            <canvas id="pieChart" style="max-width: 500px;"></canvas>
          </div>

        </div>
      </div>
    </div> -->
  </div>
</body>

</html>