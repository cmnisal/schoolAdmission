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
      <h1 style="padding-top:50px;">
        Children of Past Pupils
      </h1>
      <br />
      <div class="row">
        <form action="#" method="POST" class="form-horizontal">
        <div style="margin-bottom: 25px" class="input-group">
          <label style="background-color:#28a745; color:white;padding:10px;"
            >Name of School</label
          >
          <input
            type="text"
            name="school_name"
            placeholder="Royal College, Colombo 07"
            style="margin-bottom:8px;"
          />
        </div>

        <div style="margin-bottom: 25px" class="input-group">
          <label style="background-color:#28a745; color:white;padding:10px;"
            >No of classes studied in school</label
          >
          <input
            type="text"
            name="classes"
            placeholder="13"
            style="margin-bottom:8px;"
          />
        </div>

        <div style="margin-bottom: 25px" class="input-group">
          <label style="background-color:#28a745; color:white;padding:10px;"
            >Period spent in the school as a pupil</label
          >
          <input
            type="text"
            name="period_years"
            placeholder="1"
            style="margin-bottom:8px;"
          />

          <input
            type="text"
            name="period_months"
            placeholder="13"
            style="margin-bottom:8px;"
          />
        </div>

        <div style="margin-bottom: 25px" class="input-group">
          <label style="background-color:#28a745; color:white;padding:10px;"
            >Educational achievements gained during the period of
            schooling</label
          >
          <textarea cols="90" name="achievements"></textarea>
        </div>

        <div class="col-6">
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Membership in Past Pupil Associations</label
            >
            <textarea placeholder="" name="memberships" cols="60"></textarea>
          </div>
        </div>

        <div class="col-6">
          <div style="margin-bottom: 25px" class="input-group">
            <label style="background-color:#28a745; color:white;padding:10px;"
              >Educational Achievements after period of schooling</label
            >
            <textarea placeholder="" name="achievements_after" cols="60"></textarea>
          </div>
        </div>

        <div style="margin-bottom: 25px" class="input-group">
          <label style="background-color:#28a745; color:white;padding:10px;"
            >Assistance provided for the Development of the School</label
          >
          <textarea
            cols="90"
            placeholder="Should be certified by the Principal"
            name="assistance"
          ></textarea>
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
