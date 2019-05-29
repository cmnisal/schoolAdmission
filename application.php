<?php
include('./api/db.php');
$cat = "";
$file = "#";
if (isset($_GET['cat'])) {
  $cat = $_GET['cat'];
  switch ($cat) {
    case 'prox':
      $file = "proximity-application.php";
      break;
    case 'alum':
      $file = "pastpupil-application.php";
      break;
    case 'sibling':
      $file = "siblings-application.php";
      break;
    default:
      $file = "declaration.php";
      break;
  }
}
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
  <link rel="stylesheet" href="./css/style.css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body style="background-color:#eee;">
  <div class="container">
    <h1>Application for Admission to the Grade One in the year 2019</h1>

    <h3>Details of the child</h3>

    <form action="<?php echo $file;  ?>" class="form-horizontal" method="POST">
      <div style="margin-bottom: 25px" class="input-group">
        <label style="background-color:#28a745; color:white;padding:10px;">Name in full</label>
        <input type="text" name="full_name" size="30" placeholder="Name" style="margin-bottom:8px;" />
      </div>

      <div style="margin-bottom: 25px" class="input-group">
        <label style="background-color:#28a745; color:white;padding:10px;">Name with initials</label>
        <input type="text" name="init_name" size="30" placeholder="Name with initials" style="margin-bottom:8px;" />
      </div>

      <div style="margin-bottom: 25px" class="input-group">
        <label style="background-color:#28a745; color:white;padding:10px;">Sex</label>&nbsp;
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="sex" id="sex_male" value="male" />
          <label class="form-check-label" for="sex_male">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="sex" id="sex_female" value="female" />
          <label class="form-check-label" for="sex_female">Female</label>
        </div>
      </div>

      <div style="margin-bottom: 25px" class="input-group">
        <label style="background-color:#28a745; color:white;padding:10px;">Religion</label>
        <input type="text" name="religion" size="30" placeholder="Religion" style="margin-bottom:8px;" />
      </div>

      <div style="margin-bottom: 25px" class="input-group">
        <label style="background-color:#28a745; color:white;padding:10px;">Medium of learning</label>&nbsp;
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="medium" id="sinhala" value="sinhala" />
          <label class="form-check-label" for="sinhala">Sinhala</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="medium" id="tamil" value="tamil" />
          <label class="form-check-label" for="tamil">Tamil</label>
        </div>
      </div>

      <div style="margin-bottom: 25px" class="input-group">
        <label style="background-color:#28a745; color:white;padding:10px;">Date of birth</label>
        <input type="text" size="30" name="date_of_birth" placeholder="dd / mm/ yyyy" style="margin-bottom:8px;" />
      </div>

      <div style="margin-bottom: 25px" class="input-group">
        <label style="background-color:#28a745; color:white;padding:10px;">Age on 31st January 2019</label>
        <div class="form-group col-md-3">
          <label for="years">Years</label>
          <select id="years" name="years" class="form-control">
            <option disabled selected>Choose...</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>

        <div class="form-group col-md-3">
          <label for="months">Months</label>
          <select id="months" name="months" class="form-control">
            <option disabled selected>Choose...</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="days">Days</label>
          <select id="days" name="days" class="form-control">
            <option disabled selected>Choose...</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
          </select>
        </div>
      </div>

      <h3>Details of the applicant:</h3>
      <p>(Mother/Father/Legal Guardian)</p>

      <br />
      <div class="row">
        <div class="col-6">
          <h2>Applicant</h2>
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Name in full</label>
            <input type="text" name="guardian_full_name" size="30" placeholder="Name in full" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Name with initials</label>
            <input type="text" name="guardian_init_name" size="30" placeholder="Name with initials" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Type of applicant</label>&nbsp;
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="guardian_type" id="father" value="father" />
              <label class="form-check-label" for="father">Father</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="guardian_type" id="mother" value="mother" />
              <label class="form-check-label" for="mother">Mother</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="guardian_type" id="guardian" value="guardian" />
              <label class="form-check-label" for="guardian">Guardian</label>
            </div>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">NIC</label>
            <input type="text" name="NIC" size="30" placeholder="NIC" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Are you a Sri Lankan</label>&nbsp;
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="srilankan" id="yes" value="yes" />
              <label class="form-check-label" for="yes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="srilankan" id="no" value="no" />
              <label class="form-check-label" for="no">No</label>
            </div>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Religion</label>
            <input type="text" name="guardian_religion" size="30" placeholder="Religion" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Address</label>
            <input type="text" name="guardian_address" size="30" placeholder="Address" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Telephone</label>
            <input type="text" name="guardian_tel" size="30" placeholder="Telephone" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Residential District</label>
            <input type="text" name="guardian_district" size="30" placeholder="District" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Divisional Secretariat relevant to the place of living</label>
            <textarea cols="46" name="divisional_secretariat" placeholder="Required Field"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Grama Niladhari Division and number relevant to the place of
              living</label>
            <textarea cols="60" name="grama_division" placeholder="Required Field"></textarea>
          </div>
        </div>

        <div class="col-6">
          <h2>Spouse</h2>
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Name in full</label>
            <input type="text" name="spouse_full_name" size="30" placeholder="Name in full" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Name with initials</label>
            <input type="text" name="spouse_init_name" size="30" placeholder="Name with initials" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Type of applicant</label>&nbsp;
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="spouse_type" id="spouse_type_father" value="father" />
              <label class="form-check-label" for="spouse_type_father">Father</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="spouse_type" id="spouse_type_mother" value="mother" />
              <label class="form-check-label" for="spouse_type_mother">Mother</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="spouse_type" id="spouse_type_guardian" value="guardian" />
              <label class="form-check-label" for="spouse_type_guardian">Guardian</label>
            </div>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">NIC</label>
            <input type="text" name="spouse_NIC" size="30" placeholder="NIC" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Are you a Sri Lankan</label>&nbsp;
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="spouse_srilankan" id="spouse_srilankan_yes" value="yes" />
              <label class="form-check-label" for="spouse_srilankan_yes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="spouse_srilankan" id="spouse_srilankan_no" value="no" />
              <label class="form-check-label" for="spouse_srilankan_no">No</label>
            </div>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Religion</label>
            <input type="text" name="spouse_religion" size="30" placeholder="Religion" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Address</label>
            <input type="text" name="spouse_address" size="30" placeholder="Address" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Telephone</label>
            <input type="text" name="spouse_tel" size="30" placeholder="Telephone" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Residential District</label>
            <input type="text" name="spouse_res_district" size="30" placeholder="District" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Divisional Secretariat relevant to the place of living</label>
            <textarea cols="46" name="spouse_div_sec" placeholder="Required Field"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Grama Niladhari Division and number relevant to the place of
              living</label>
            <textarea cols="60" name="spouse_grama" placeholder="Required Field"></textarea>
          </div>
        </div>
      </div>

      <h3>Electoral List Registration</h3>

      <p>
        (Parents/Legal guardians applying under proximity and brother categories
        should obtain particulars from the Grama Niladhari office in proof of
        their place of residence and complete following section. This
        information should then be certified by the applicant.)
      </p>

      <div class="row">
        <div class="col-4" style="border: 1px solid black; padding:10px">
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Year</label>
            <input type="text" name="electoral_1_year" placeholder="2017" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Electoral District</label>
            <input type="text" name="electoral_1_district" placeholder="Narahenpita" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Grama Niladhari Div and No</label>
            <input type="text" name="electoral_1_grama_div" placeholder="005002" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Polling Division:</label>
            <input type="text" name="electoral_1_poll" placeholder="098788" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Household No</label>
            <input type="text" name="electoral_1_household" placeholder="655/3" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Serial No</label>
            <input type="text" name="electoral_1_serial" placeholder="M1254564" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Name of Electors (All persons)</label>
            <textarea cols="60" name="electoral_1_name" placeholder=""></textarea>
          </div>
        </div>

        <div class="col-4" style="border: 1px solid black; padding:10px">
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Year</label>
            <input type="text" name="electoral_2_year" placeholder="2017" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Electoral District</label>
            <input type="text" name="electoral_2_district" placeholder="Narahenpita" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Grama Niladhari Div and No</label>
            <input type="text" name="electoral_2_grama_div" placeholder="005002" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Polling Division:</label>
            <input type="text" name="electoral_2_poll" placeholder="098788" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Household No</label>
            <input type="text" name="electoral_2_household" placeholder="655/3" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Serial No</label>
            <input type="text" name="electoral_2_serial" placeholder="M1254564" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Name of Electors (All persons)</label>
            <textarea cols="60" name="electoral_2_name" placeholder=""></textarea>
          </div>
        </div>

        <div class="col-4" style="border: 1px solid black; padding:10px">
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Year</label>
            <input type="text" name="electoral_3_year" placeholder="2017" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Electoral District</label>
            <input type="text" name="electoral_3_district" placeholder="Narahenpita" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Grama Niladhari Div and No</label>
            <input type="text" name="electoral_3_grama_div" placeholder="005002" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Polling Division:</label>
            <input type="text" name="electoral_3_poll" placeholder="098788" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Household No</label>
            <input type="text" name=electoral_3_household"" placeholder="655/3" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Serial No</label>
            <input type="text" name="electoral_3_serial" placeholder="M1254564" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Name of Electors (All persons)</label>
            <textarea cols="60" name="electoral_3_name" placeholder=""></textarea>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-4" style="border: 1px solid black; padding:10px">
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Year</label>
            <input type="text" name="electoral_4_year" placeholder="2017" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Electoral District</label>
            <input type="text" name="electoral_4_district" placeholder="Narahenpita" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Grama Niladhari Div and No</label>
            <input type="text" name="electoral_4_grama_div" placeholder="005002" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Polling Division:</label>
            <input type="text" name="electoral_4_poll" placeholder="098788" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Household No</label>
            <input type="text" name="electoral_4_household" placeholder="655/3" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Serial No</label>
            <input type="text" name="electoral_4_serial" placeholder="M1254564" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Name of Electors (All persons)</label>
            <textarea cols="60" name="electoral_4_name" placeholder=""></textarea>
          </div>
        </div>

        <div class="col-4" style="border: 1px solid black; padding:10px">
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Year</label>
            <input type="text" name="electoral_5_year" placeholder="2017" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Electoral District</label>
            <input type="text" name="electoral_5_district" placeholder="Narahenpita" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Grama Niladhari Div and No</label>
            <input type="text" name="electoral_5_grama_div" placeholder="005002" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Polling Division:</label>
            <input type="text" name="electoral_5_poll" placeholder="098788" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Household No</label>
            <input type="text" name="electoral_5_household" placeholder="655/3" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Serial No</label>
            <input type="text" name="electoral_5_serial" size="32" placeholder="M1254564" style="margin-bottom:8px;" />
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;">Name of Electors (All persons)</label>
            <textarea cols="60" name="electoral_5_name" placeholder=""></textarea>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center" style="padding-bottom:100px; padding-top:20px;">
          <input type="submit" class="btn btn-success" value="Save & Continue">
        </div>
      </div>
    </form>
  </div>
  <!-- <script type="text/javascript">
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
</script> -->
</body>

</html>