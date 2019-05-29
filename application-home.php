<?php
include('./api/db.php');
?>
<!DOCTYPE html>

<html>
<script type="text/javascript">
    (function() {
      var div = document.createElement("div");
      document.getElementsByTagName('body')[0].appendChild(div);
      div.outerHTML = "<div id='botDiv' style='height: 38px; position: fixed; bottom: 0; z-index: 1000; background-color: #fff'><div id='botTitleBar' style='height: 38px; width: 400px; position:fixed; cursor: pointer;'></div><iframe width='400px' height='600px' src='https://webchat.botframework.com/embed/admissionlk-bot?s=1OUMRVAAM1Q._ppQD7RYgNLg1XcByl9io9lc46sHOfwvh01U5J_O-Qo'></iframe></div>";

      document.querySelector('body').addEventListener('click', function(e) {
        e.target.matches = e.target.matches || e.target.msMatchesSelector;
        if (e.target.matches('#botTitleBar')) {
          var botDiv = document.querySelector('#botDiv');
          botDiv.style.height = botDiv.style.height == '600px' ? '38px' : '600px';
        };
      });
    }());
  </script>
<head>
    <title>Sri Lanka Education Ministry Admission Portal</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.png" />
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>



<body style="background-color:#eee;">

    <div class="container">
        <h1 class="text-center" style="padding-top:50px;">Applicant Category</h1>
        <h4 class="text-center">Please select under which category do you wish to apply your child</h4>
        <br><br>
        <div class="row">

            <div class="col-4">
                <a href="application.php?cat=prox">
                    <div class="circletag" id="nay" style="margin-left:110px;">
                        <div style="padding-top: 50px;text-align: center;">
                            <p class="text-center"><img src="./img/proximity.png"></p>
                        </div>
                    </div>
                </a>
                <h3 class="text-center">Close Proximity</h3>
                <p class="text-center">Apply your children of residents in close proximity to the school</p>
            </div>

            <div class="col-4">

                <a href="application.php?cat=alum">
                    <div class="circletag" id="nay" style="margin-left:110px;">
                        <div style="padding-top: 38px;text-align: center;"><img src="./img/alumini.png"></div>
                    </div>
                </a>
                <h3 class="text-center">Children of Alumni</h3>
                <p class="text-center">Apply your children to the school you attended</p>
            </div>

            <div class="col-4">
                <a href="application.php?cat=sibling">
                <div class="circletag" id="nay" style="margin-left:110px;">
                    <div style="padding-top: 38px;text-align: center;"><img src="./img/siblings.png"></div>
                </div>
                </a>
                <h3 class="text-center">Siblings</h3>
                <p class="text-center">Siblings of current students studying in the school</p>
            </div>

        </div>

        <div class="row">

            <div class="col-4">
                <div class="circletag" id="nay" style="margin-left:110px;">
                    <div style="padding-top: 38px;text-align: center;"><img src="./img/staff.png"></div>
                </div>
                <h3 class="text-center">institution Staff</h3>
                <p class="text-center">Children of staff of an institution directly involed in school education</p>
            </div>

            <div class="col-4">
                <div class="circletag" id="nay" style="margin-left:110px;">
                    <div style="padding-top: 38px;text-align: center;"><img src="./img/officer.png"></div>
                </div>
                <h3 class="text-center">Officer Transfers</h3>
                <p class="text-center">Children of officers tranferred on exigency of government service/on</p>

            </div>

            <div class="col-4">
                <div class="circletag" id="nay" style="margin-left:110px;">
                    <div style="padding-top: 38px;text-align: center;"><img src="./img/foreign.png"></div>
                </div>
                <h3 class="text-center">Foreign Resident</h3>
                <p class="text-center">Children of persons arriving after living abroad with the child</p>
            </div>

        </div>

    </div>



</body>

</html>