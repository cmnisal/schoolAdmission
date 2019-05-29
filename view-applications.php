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

<body>
  <div class="container">
    <div class="row">
      <div class="col-2" style="background-color:#eee; padding:10px">
        <h2>Filters</h2>
        <br /><br />

        <h4><u>Category</u></h4>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
          <label class="form-check-label" for="exampleRadios1">
            Proximity
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" />
          <label class="form-check-label" for="exampleRadios2">
            Alumni
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
          <label class="form-check-label" for="exampleRadios1">
            Siblings
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" />
          <label class="form-check-label" for="exampleRadios2">
            Foreign Resident
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked />
          <label class="form-check-label" for="exampleRadios1">
            Institution Staff
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" />
          <label class="form-check-label" for="exampleRadios2">
            Officer Transfers
          </label>
        </div>


        <button class="btn btn-success">Interview Selected</button>
      </div>

      <div class="col-10">
        <br>
        <button class="btn btn-success" onclick="sortTable()">Sort by Probability</button>
        <br>
        <br>
        <table class="table table-hover" id="myTable" style="width:100%">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Address</th>
              <th scope="col">Category</th>
              <th scope="col">Probability</th>
              <th scope="col">Interview</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <input type="checkbox" checked /> Asoka Goonawardana
              </th>
              <td>33A, Polgoda Mw, Nugegoda</td>
              <td>Alumni</td>
              <td>85%</td>
              <td><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Interview</button></td>
            </tr>
            <tr>
              <th scope="row">
                <input type="checkbox" checked /> Tharusha Perera
              </th>
              <td>51/2, School Lane, Col-01</td>
              <td>Alumni</td>
              <td>34%</td>
              <td><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Interview</button></td>

            </tr>
            <tr>
              <th scope="row">
                <input type="checkbox" checked /> Lakindu Goonawardana
              </th>
              <td>21, Kottawa Rd, Kottawa</td>
              <td>Alumni/Siblings</td>
              <td>56%</td>
              <td><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Interview</button></td>

            </tr>
            <tr>
              <th scope="row">
                <input type="checkbox" checked /> Adhil Rasheed
              </th>
              <td>655/3, Elvitigala Mw, Col - 05</td>
              <td>Proximity</td>
              <td>72%</td>
              <td><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Interview</button></td>

            </tr>
            <tr>
              <th scope="row">
                <input type="checkbox" checked /> Shehan Fernando
              </th>
              <td>87A, 2nd Cross Street, Col - 01</td>
              <td>Alumni/Siblings</td>
              <td>56%</td>
              <td><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Interview</button></td>

            </tr>
            <tr>
              <th scope="row">
                <input type="checkbox" checked /> Tharusha Perera
              </th>
              <td>53, Maligakanda Rorad, Colombo 10</td>
              <td>Alumni</td>
              <td>86%</td>
              <td><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Interview</button></td>

            </tr>
            <tr>
              <th scope="row">
                <input type="checkbox" checked /> Prasanna Silva
              </th>
              <td>#123/2A, Malabe Rd, Kaduwela</td>
              <td>Siblings</td>
              <td>66%</td>
              <td><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Interview</button></td>

            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <h4 class="text-center" style="padding-top:50px;">Successfully sent Interview Schedule to the selected Applicants</h4>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</body>
<script>
  function sortTable() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("myTable");
    switching = true;
    /* Make a loop that will continue until
    no switching has been done: */
    while (switching) {
      // Start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /* Loop through all table rows (except the
      first, which contains table headers): */
      for (i = 1; i < (rows.length - 1); i++) {
        // Start by saying there should be no switching:
        shouldSwitch = false;
        /* Get the two elements you want to compare,
        one from current row and one from the next: */
        x = rows[i].getElementsByTagName("TD")[2];
        y = rows[i + 1].getElementsByTagName("TD")[2];
        // Check if the two rows should switch place:
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
      if (shouldSwitch) {
        /* If a switch has been marked, make the switch
        and mark that a switch has been done: */
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }

  function filterFunction() {
    // Declare variables 
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
</script>


</html>