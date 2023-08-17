<?php
session_start();
?>
<?php
if($_SESSION['flag']==1){
?>
<?php
$Queryo="SELECT * FROM `tbl_reg_details` WHERE `regdet_id`='".$_SESSION['id'] ."'"; 

$con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
$result = mysqli_query($con, $Queryo);
$rowo=mysqli_fetch_array($result)
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <script>
    function getExtension(filename) {
      var parts = filename.split('.');
      return parts[parts.length - 1];
    }

    function isImage() {
      var fileInput = document.getElementById('file');
      var filename = fileInput.value;
      var ext = getExtension(filename);
      switch (ext.toLowerCase()) {
        case 'jpg':
        case 'gif':
        case 'bmp':
        case 'png':
          //etc
          $('#submit').attr("disabled", false);
          return true;
      }
      $('#submit').attr("disabled", true);
      alert("invalid file type");
      return false;
    }

    function myemail() {
      var n = document.getElementById("email");
      var em = /\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (n.value == "") {
        document.getElementById("conside").innerHTML = "<span class='error'>Please enter a valid Email</span>";
        $('#submit').attr("disabled", true);
      } else if (!(n.value.match(em) && n.value.match('/[\S]+@(gmail.com)/'))) {
        document.getElementById("conside").innerHTML = "<span class='error'>This is not a valid Email. Please try again</span>";
        $('#submit').attr("disabled", true);
      } else if ((n.value.match(em) && n.value.match('/[\S]+@(gmail.com)/'))) {
        document.getElementById("conside").innerHTML = "<span class='error'></span>";
        $('#submit').attr("disabled", false);

      }
    }

    function myphno() {
      var n4 = document.getElementById("phno");
      var p = /([6789][0-9]{9,10})+$/;

      if (n4.value == "") {
        document.getElementById("considph").innerHTML = "<span class='error'>Please enter a valid phone number</span>";
        $('#submit').attr("disabled", true);
      } else if (!n4.value.match(p)) {
        document.getElementById("considph").innerHTML = "<span class='error'>This is not a valid phone number. Please try again</span>";
        $('#submit').attr("disabled", true);
      } else if (n4.value.match(p)) {
        document.getElementById("considph").innerHTML = "<span class='error'></span>";
        $('#submit').attr("disabled", false);
      }
    }

    $(document).ready(function() {
      $("#uname").keyup(function() {

        var uname = document.getElementById("uname").value
        var c_uname = /^[a-z_0-9]{3,20}$/
        r_uname = c_uname.test(uname)
        if (r_uname == false) {
          $("#consid0").text("*Enter a valid Username");

        } else {
          $.ajax({
            url: 'uservalidate1.php',
            method: "POST",
            data: {
              username: uname
            },
            success: function(data) {
              if (data != '0') {
                $('#consid0').html('<span class="text-danger">Username Already exist</span>');
                $('#submit').attr("disabled", false);
              } else {
                // $('#inputuname2').html('<span class="text-success">Valid Username</span>');
                $('#consid0').text("");
                $('#submit').attr("disabled", false);
              }
            }
          })
        }
      })
    });
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- Section: Design Block -->
  <section class="text-center" style="">
    <!-- Background image -->

    <div class="p-5 bg-image" style="
          background-image: url('signin_back.jpg');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: 300px;
          "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
          margin-top: -100px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Edit profile</h2>
            <form method="POST" action='' enctype='multipart/form-data'>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div style='transform:translate(0,40px)' class="form-floating mb-3">
                    <input style='' type="text" class="form-control" id="uname" name="uname" value='<?php echo $rowo['regdet_name']?>' onkeyup="" placeholder="name@example.com">
                    <label for="uname">Username</label>
                    <span id="consid0" style="position:sticky"></span>
                  </div>

                </div>

              </div>
              <div class='row'>

                <span id="consid1" style=""></span>
              
              <!-- Password input -->
              <div class="form-floating mb-3">
                <input type="text" class="form-control" maxlength="10" id="phno" value='<?php echo $rowo['regdet_phone']?>' name='phno' onkeyup="myphno()" placeholder="name@example.com">
                <label for="phno">Phone</label>
              </div>
              <span id="considph" style="position:sticky;color:red;"></span>
              </div>
              <div class="mb-3 ">
                <label for="file" class="form-label"><img src="uploads/<?php echo $rowo['regdet_photo']?>" style="height:50px;cursor: pointer;" alt=""></label>
                <input class="form-control" name='file' style="visibility:hidden" type="file"  value="uploads/<?php echo $rowo['regdet_photo']?>" onchange='isImage()' id="file" required>
              </div>


              <!-- Checkbox -->

              <!-- Submit button -->
              <input type="submit" id='submit' value=" EDIT" name='submit' class="btn btn-outline-danger btn-block mb-4">

              </input>

              <!-- Register buttons -->
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</body>

</html>




<?php

if (isset($_POST["submit"])) {
  $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);

  $name = $_POST["uname"];
  $file = $_FILES["file"]["name"];
  $phno = $_POST["phno"];


  // Check connection
  $q = "UPDATE `tbl_reg_details` SET `regdet_name`='$name',`regdet_phone`='$phno',`regdet_photo`='$file' WHERE `regdet_id`='".$_SESSION['id'] ."'";
  $re = mysqli_query($con, $q);
  if ($re) {
    $target = "uploads/";
    $tarpath = $target . basename($file);
    move_uploaded_file($_FILES["file"]["tmp_name"], $tarpath);
  }
  mysqli_close($con);
  echo "<script type='text/javascript'> window.location.href = '    home/index.php'</script>";
  exit();
}
?>
<?php
}
else{
  echo "<script type='text/javascript'> window.location.href = 'signin.php'</script>";
}
?> b