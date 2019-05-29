<?php
include('./api/db.php');
?>
<!DOCTYPE html>

<html>

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
        <a href="dashboard.php" style="float: right; color:black;padding-top:10px"><b>Back to Home</b></a>

        <h1 class="text-center" style="padding-top:50px;">School Comparison</h1>
        <br>

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="card card-sm">
                    <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                </form>
            </div>
        </div>



        <div class="row" style="margin-left: 160px">

            <div class="col-3" style="border: 1px solid black; margin:10px">
                <p class="text-center"><img src="./img/royal.png" width="130px" height="170px"></p>
                <h3 class="text-center">Royal College, Colombo 07</h3>

                <p>Address: Rajakeeya Mw, Colombo 07</p>
                <p>Population: 8500</p>
                <p>Grades: 1-13</p>
                <p>Classes per Grade: 10</p>
                <p>Demand: High</p>
                <p>Academic Facilities:
                    O/L, A/L Chemestry Labs, O/L, A/L Physics Labs, IT Labs
                </p>
                <p>Sports Facilities:
                    Cricket Ground, Football Ground, Basketball Courts,
                    Tennis Courts, Table Tennis Courts, Air Rifle Range
                    Boxing Court
                </p>

                <p>A/L Mathematics Pass Rate: 68%</p>
                <p>A/L Science Pass Rate: 74%</p>
                <p>A/L Commerce Pass Rate: 79%</p>
                <p>A/L Arts Pass Rate: 86%</p>
            </div>


            <div class="col-3" style="border: 1px solid black; margin:10px">
                <p class="text-center"><img src="./img/pathana.png" width="150px" height="170px"></p>
                <h3 class="text-center">Isipathana College, Colombo 05</h3>

                <p>Address: Isipathana Mw, Colombo 05</p>
                <p>Population: 4500</p>
                <p>Grades: 1-13</p>
                <p>Classes per Grade: 10</p>
                <p>Demand: High</p>
                <p>Academic Facilities:
                    O/L, A/L Chemestry Labs, O/L, A/L Physics Labs, IT Labs
                </p>
                <p>Sports Facilities: Cricket Ground, Basketball Courts, Table Tennis Courts, Boxing Court</p>

                <p>A/L Mathematics Pass Rate: 60%</p>
                <p>A/L Science Pass Rate: 72%</p>
                <p>A/L Commerce Pass Rate: 62%</p>
                <p>A/L Arts Pass Rate: 78%</p>
            </div>

            <div class="col-3" style="border: 1px solid black; margin:10px">
                <p class="text-center"><img src="./img/thurstan.png" width="150px" height="170px"></p>
                <h3 class="text-center">Thurstan College, Colombo 07</h3>
                <p>Address: Thurstan Rd, Colombo 07</p>
                <p>Population: 3500</p>
                <p>Grades: 1-13</p>
                <p>Classes per Grade: 10</p>
                <p>Demand: High</p>
                <p>Academic Facilities:
                    O/L, A/L Chemestry Labs, O/L, A/L Physics Labs, IT Labs
                </p>
                <p>Sports Facilities: Cricket Ground, Football Ground, Basketball Courts, Tennis Courts</p>

                <p>A/L Mathematics Pass Rate: 60%</p>
                <p>A/L Science Pass Rate: 72%</p>
                <p>A/L Commerce Pass Rate: 72%</p>
                <p>A/L Arts Pass Rate: 88%</p>
            </div>

        </div>


    </div>




</body>

</html>