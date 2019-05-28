<?php
include('./api/db.php');
?>
<!DOCTYPE html>

<html>
  <head>
    <title>Sri Lanka Education Ministry Admission Portal</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.png" />
    <link rel="stylesheet" href="./css/style.css" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </head>

  <body >
    <div class="container">
      <div class="row">
        <div class="col-2" style="background-color:#eee; padding:10px" >
          <h2>Filters</h2>
          <br /><br />

          <h4><u>Probability</u></h4>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="exampleRadios"
              id="exampleRadios1"
              value="option1"
              checked
            />
            <label class="form-check-label" for="exampleRadios1">
              High - Low
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="exampleRadios"
              id="exampleRadios2"
              value="option2"
            />
            <label class="form-check-label" for="exampleRadios2">
              Low - High
            </label>
          </div>

          <h4><u>Category</u></h4>

          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="exampleRadios"
              id="exampleRadios1"
              value="option1"
              checked
            />
            <label class="form-check-label" for="exampleRadios1">
             Proximity
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="exampleRadios"
              id="exampleRadios2"
              value="option2"
            />
            <label class="form-check-label" for="exampleRadios2">
              Alumni
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="exampleRadios"
              id="exampleRadios1"
              value="option1"
              checked
            />
            <label class="form-check-label" for="exampleRadios1">
              Siblings
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="exampleRadios"
              id="exampleRadios2"
              value="option2"
            />
            <label class="form-check-label" for="exampleRadios2">
              Foreign Resident
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="exampleRadios"
              id="exampleRadios1"
              value="option1"
              checked
            />
            <label class="form-check-label" for="exampleRadios1">
              Institution Staff
            </label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="exampleRadios"
              id="exampleRadios2"
              value="option2"
            />
            <label class="form-check-label" for="exampleRadios2">
              Officer Transfers
            </label>
          </div>


          <button class="btn btn-success">Interview Selected</button>
        </div>

        <div class="col-10">
          <table class="table table-hover" style="width:100%">
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
                <td>655/3, Elvitigala Mw. Col-05</td>
                <td>Proximity/Alumni</td>
                <td>85%</td>
                <td><button class="btn btn-success">Interview</button></td>
              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox" checked /> Tharusha Perera
                </th>
                <td>51/2, School Lane, Col-01</td>
                <td>Alumni</td>
                <td>34%</td>
                <td><button class="btn btn-success">Interview</button></td>

              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox" checked /> Kanthi Jayasuriya
                </th>
                <td>21, Kottawa Rd, Kottawa</td>
                <td>Alumni/Siblings</td>
                <td>56%</td>
                <td><button class="btn btn-success">Interview</button></td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
