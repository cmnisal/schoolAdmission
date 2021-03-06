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

        <h1 class="text-center" style="padding-top:50px;">School Interviews/Acceptances</h1>
        <br>


        <h2>School Interview Appointments</h2>

        <!-- <div class="row">

            <p style="background-color: white; padding:10px">Royal College</p>

            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-success">Accept</button>
                <button type="button" class="btn btn-danger">Reject</button>
            </div>

        </div> -->

        <div class="col-5">
            <table class="table table-striped">
                <tr style="background-color: white;">
                    <td>Royal College, Colombo 07</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success">Accept</button>
                            <button type="button" class="btn btn-danger">Reject</button>
                        </div>

                    </td>
                </tr>

                <tr style="background-color: white;">
                    <td>Ananda College, Colombo</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" id="accepted" class="btn btn-success">Accept</button>
                            <button type="button" id="rejected" class="btn btn-danger">Reject</button>
                        </div>
                    </td>
                </tr>

                <tr style="background-color: white;">
                    <td>Isipathana College, Colombo 05</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success">Accept</button>
                            <button type="button" class="btn btn-danger">Reject</button>
                        </div>
                    </td>
                </tr>

                <tr style="background-color: white;">
                    <td>Isipthana College, Colombo 05</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success">Accept</button>
                            <button type="button" class="btn btn-danger">Reject</button>
                        </div>
                    </td>
                </tr>

                <tr style="background-color: white;">
                    <td>Mahanama College, Colombo 07</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success">Accept</button>
                            <button type="button" class="btn btn-danger">Reject</button>
                        </div>
                    </td>
                </tr>

            </table>
        </div>

        <h2>School Accepted Admission</h2>

        <div class="col-5">
            <table class="table table-striped">
                <tr style="background-color: white;">
                    <td>Royal College, Colombo 07</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" id="accepted" class="btn btn-success btn-accepted">Accept</button>
                            <button type="button" id="rejected" class="btn btn-danger btn-rejected">Reject</button>
                        </div>
                    </td>
                </tr>

                <tr style="background-color: white;">
                    <td>Isipathana College, Colombo</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success btn-accepted">Accept</button>
                            <button type="button" class="btn btn-danger btn-rejected">Reject</button>
                        </div>
                    </td>
                </tr>

            </table>
        </div>


    </div>

<script>

var acceptF = true;
var rejectF = true;
var adacpt = true;
var adrjct = true;
    
$('.btn-success').on('click',function(){
    var lastObj = $(this); 
    var nextObj = lastObj.next();    
    var parent = lastObj.parent();          
	//$(parent).css("background-color","#98E6AB");
    if(acceptF){
        $(nextObj).hide();
        $(parent).css("width","100%");
    }
    else{
        $(nextObj).show();
    }

    acceptF = !acceptF;
    
});

$('.btn-danger').on('click',function(e){
    var lastObj = $(this);
    var preObj = lastObj.prev();    
    var parent = lastObj.parent();
	//$(parent).css("background-color","#F0A8AF");
    if(rejectF){
        $(preObj).hide();
        $(parent).css("width","100%");
    }
    else{
        $(preObj).show();
    }

    rejectF = !rejectF;
    	
});

// $('.btn-accepted').on('click',function(){
//     var lastObj = $(this); 
//     var nextObj = lastObj.next();    
//     var parent = lastObj.parent().parent().parent();
//     var acptbtn = parent.next().find('.btn-accepted');
//     var length = $('.btn-accepted').closest('tr').length;
//     console.log(length);          
// 	//$(parent).css("background-color","#98E6AB");
//     if(adacpt){
//         $(nextObj).hide();
//         $(parent).css("width","100%");
//         for(var i = 1;i<length;i++){

//         }
//         $(acptbtn).hide();
//         $(acptbtn.next()).css("width","100%");
//     }
//     else{
//         $(nextObj).show();
//     }

//     adacpt = !adacpt;
    
// });

</script>   
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


</body>

</html>