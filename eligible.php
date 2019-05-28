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
        <h1 class="text-center" style="padding-top:50px;">Eligible Schools</h1>
        <br>
        <div class="row">

            <div class="col-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center">
                        Royal College, Colombo 07
                    </div>
                    <div class="card-body bg-light text-center" style="color:black">
                        <h1 class="card-title">
                            <b><?php echo (rand(70, 98)); ?>%</b>
                        </h1>
                        <h4>Probability</h4>
                        <button type="button" onclick="hidebutton(this.id)" id="royal" class="btn btn-success">Apply</button>
                    </div>
                </div>
            </div>


            <div class="col-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center">
                        Isipathana College, Colombo
                    </div>
                    <div class="card-body bg-light text-center" style="color:black">
                        <h1 class="card-title">
                            <b><?php echo (rand(70, 98)); ?>%</b>
                        </h1>
                        <h4>Probability</h4>
                        <button type="button" onclick="hidebutton(this.id)" id="isipathana" class="btn btn-success">Apply</button>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center">
                        Ananda College, Colombo
                    </div>
                    <div class="card-body bg-light text-center" style="color:black">
                        <h1 class="card-title">
                            <b><?php echo (rand(70, 98)); ?>%</b>
                        </h1>
                        <h4>Probability</h4>
                        <button type="button" onclick="hidebutton(this.id)" id="ananda" class="btn btn-success">Apply</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center">
                        Thurstan College, COlombo 07
                    </div>
                    <div class="card-body bg-light text-center" style="color:black">
                        <h1 class="card-title">
                            <b><?php echo (rand(70, 98)); ?>%</b>
                        </h1>
                        <h4>Probability</h4>
                        <button type="button" onclick="hidebutton(this.id)" id="thurstan" class="btn btn-success">Apply</button>
                    </div>
                </div>
            </div>


            <div class="col-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center">
                        Lumbini College, Colombo
                    </div>
                    <div class="card-body bg-light text-center" style="color:black">
                        <h1 class="card-title">
                            <b><?php echo (rand(70, 98)); ?>%</b>
                        </h1>
                        <h4>Probability</h4>
                        <button type="button" onclick="hidebutton(this.id)" id="lumbini" class="btn btn-success">Apply</button>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center">
                        St. Josheph's College, Colombo
                    </div>
                    <div class="card-body bg-light text-center" style="color:black">
                        <h1 class="card-title">
                            <b><?php echo (rand(70, 98)); ?>%</b>
                        </h1>
                        <h4>Probability</h4>
                        <button type="button" onclick="hidebutton(this.id)" id="josheph" class="btn btn-success">Apply</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr>

    <div class="container">
        <h1 class="text-center">Apply to other Schools</h1>


        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="card card-sm">
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-search h4 text-body"></i>
                        </div>
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" id="searchField" type="search" placeholder="Search topics or keywords">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-lg btn-success" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">

            <div id="search" style="display:none" class="col-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header text-center">
                        Dudly College, Colombo 05
                    </div>
                    <div class="card-body bg-light text-center" style="color:black">
                        <h1 class="card-title">
                            <b><?php echo (rand(40, 68)); ?>%</b>
                        </h1>
                        <h4>Probability</h4>
                        <button type="button" onclick="hidebutton(this.id)" id="dudly" class="btn btn-success">Apply</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 text-center" style="padding-bottom:100px">
                <a href="dashboard.php"><button class="btn btn-success">Return to Dashboard</button></a>
            </div>
        </div>

    </div>


</body>
<script type="text/javascript">
    function hidebutton(btn) {
        var x = document.getElementById(btn);
        console.log(x.className);
        if (x.className == "btn btn-success") {
            x.innerHTML = "Applied";
        } else {
            x.innerHTML = "Apply";
        }
        x.classList.toggle("btn-danger");
        // if (x.style.display === "none") {
        //     x.style.display = "block";
        // } else {
        //     x.style.display = "none";
        // }
    }

    var onChange = function(evt) {
        var s = this.value;
        if(s.startsWith("d")){
            console.log("hu");
            document.getElementById('search').style.display = "block";
        }else{
            document.getElementById('search').style.display = "none";
        }
    };
    var input = document.getElementById('searchField');
    input.addEventListener('input', onChange, false);
    

</script>

</html>