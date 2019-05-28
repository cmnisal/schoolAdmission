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
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
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

  <body style="background-color:#eee;">
    <div class="container">
      <form action="#" method="POST" class="form-horizontal"> 
      <h1 style="padding-top:50px;">
        Brothers/ sisters of students studying in the school at present
      </h1>

      <br />

      <h5>
        If a child/children of applicant is/are studying in a prospective school
      </h5>

      <div class="row">
        <div class="col-3" style="border: 1px solid black; padding:10px">
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Name of the child</label
            >
            <textarea cols="40" name="child_1_name" placeholder=""></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Name of School</label
            >
            <textarea cols="40" name="child_1_school"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Grade</label
            >
            <textarea cols="40" name="child_1_grade"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Admission Number</label
            >
            <textarea cols="40" name="child_1_admission_no"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Admission Grade to this School</label
            >
            <textarea cols="40" name="child_1_admission_grade"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Grades Spent in this school</label
            >
            <textarea cols="40" name="child_1_grades"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Achievements gained for the School</label
            >
            <textarea cols="40"  name="child_1_achievements" placeholder="Optional Field"></textarea>
          </div>
        </div>

        <div class="col-3" style="border: 1px solid black; padding:10px">
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Name of the child</label
            >
            <textarea cols="40"  name="child_2_name" placeholder=""></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Name of School</label
            >
            <textarea cols="40" name="child_2_school"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Grade</label
            >
            <textarea cols="40" name="child_2_grade"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Admission Number</label
            >
            <textarea cols="40" name="child_2_admission_no"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Admission Grade to this School</label
            >
            <textarea cols="40" name="child_2_admission_grade"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Grades Spent in this school</label
            >
            <textarea cols="40" name="child_2_grades"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Achievements gained for the School</label
            >
            <textarea cols="40" name="child_2_achievements" placeholder="Optional Field"></textarea>
          </div>
        </div>
        <div class="col-3" style="border: 1px solid black; padding:10px">
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Name of the child</label
            >
            <textarea cols="40" name="child_3_name" placeholder=""></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Name of School</label
            >
            <textarea cols="40" name="child_3_school"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Grade</label
            >
            <textarea cols="40" name="child_3_grade"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Admission Number</label
            >
            <textarea cols="40" name="child_3_admission_no"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Admission Grade to this School</label
            >
            <textarea cols="40" name="child_3_admission_grade"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Grades Spent in this school</label
            >
            <textarea cols="40" name="child_3_grades"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Achievements gained for the School</label
            >
            <textarea cols="40" name="child_3_achievements" placeholder="Optional Field"></textarea>
          </div>
        </div>
        <div class="col-3" style="border: 1px solid black; padding:10px">
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Name of the child</label
            >
            <textarea cols="40" name="child_4_name" placeholder=""></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Name of School</label
            >
            <textarea cols="40" name="child_4_school"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Grade</label
            >
            <textarea cols="40" name="child_4_grade"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Admission Number</label
            >
            <textarea cols="40" name="child_4_admission_no"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Admission Grade to this School</label
            >
            <textarea cols="40" name="child_4_admission_grade"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Grades Spent in this school</label
            >
            <textarea cols="40" name="child_4_grades"></textarea>
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Achievements gained for the School</label
            >
            <textarea cols="40" name="child_4_achievements" placeholder="Optional Field"></textarea>
          </div>
        </div>
      </div>

      <br><br>
      <div class="row">
            <div class="col-12">
              <div style="margin-bottom: 25px" class="input-group">
                <p style="background-color:#28a745; color:white;padding:10px;">
                  Number of years that the applicant was included in the electoral
                  register
                </p>
                <input type="text" placeholder="5" name="applicant_years" style="margin-bottom:15px;" />
              </div>
    
              <div style="margin-bottom: 25px" class="input-group">
                <p style="background-color:#28a745; color:white;padding:10px;">
                 Number of years that the applicant's spouse was included in the electoral register
                </p>
                <input type="text" placeholder="5" name="spouse_years" style="margin-bottom:15px;" />
              </div>
    
              <div style="margin-bottom: 25px" class="input-group">
                <p style="background-color:#28a745; color:white;padding:10px;">
                  Number of years that the legal guardian was included in the electoral register
                </p>
                <input type="text" placeholder="-" name="guardian_years" style="margin-bottom:15px;"/>
              </div>
            </div>
          </div>

      <div class="row">
        <div
          class="col-md-12 text-center"
          style="padding-bottom:100px; padding-top:20px;"
        >
          <button class="btn btn-success">Save & Continue</button>
        </div>
      </div>
    </form>
    </div>
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
