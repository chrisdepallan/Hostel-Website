<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <script>
    function password() {
      var n = document.getElementById("passwd");
      pa = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
      if (n.value == "") {
        document.getElementById("consid1").innerHTML = "<span class='error'>Please enter a valid password</span>";
        $('#submit').attr("disabled", true);
      } else if (!n.value.match(pa)) {
        document.getElementById("consid1").innerHTML = "<span class='error'>Password Must Be (min) 8 Characters and contain both numbers And Letters/ Special character</span>";
        $('#submit').attr("disabled", true);
       
      } else if (n.value.match(pa)) {

        document.getElementById("consid1").innerHTML = "<span class='error'></span>";
        $('#submit').attr("disabled", false);
      }
    }
    function cpassword() {
      var n7 = document.getElementById("passwd");
      var n8 = document.getElementById("cpasswd");
      pa = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
      if (n8.value == "") {
        document.getElementById("consid2").innerHTML = "<span class='error'>Please enter a valid password</span>";
        $('#submit').attr("disabled", true);
      } else if (n7.value != n8.value) {
        document.getElementById("consid2").innerHTML = "<span class='error'> Password Missmatch</span>";
        $('#submit').attr("disabled", true);

      } else if (n7.value == n8.value && n7.value.match(pa)) {

        document.getElementById("consid2").innerHTML = "<span class='error'></span>";
        $('#submit').attr("disabled", false);

      }
    }

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
            <h2 class="fw-bold mb-5">Change password</h2>
            <form method="POST" action='' enctype='multipart/form-data'>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-floating mb-3">
                    <div class="form-floating mb-3"><input type="password" name='passwd' class="form-control" onkeyup='password()' id="passwd" placeholder="name@example.com">
                      <label for="passwd">Password</label>
                      <span id="consid1" style="position:sticky;color:red;"></span>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" onblur='cpassword()' id="cpasswd" placeholder="name@example.com">
                      <label for="cpasswd">confirm Password</label>
                      <span id="consid2" style="position:sticky;color:red;"></span>
                    </div>
                  </div>
                </div>

              </div>
              <!-- Submit button -->
              <input type="submit" id='submit' value="Change Password" name='submit' class="btn btn-outline-danger btn-block mb-4">

              </input>

              <!-- Register buttons -->
              <div class="d-flex align-items-center justify-content-center pb-4">
                <p class="mb-0 me-2">already have an account?</p>
                <button type="button" class="btn btn-outline-danger" onclick="location.href='signin.php'">sign in UwU </button>
                          
              </div>
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
  
  $password = $_POST["passwd"];

  $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
  $qc = "UPDATE `tbl_login_details` SET `logdet_password`='$password' WHERE `logdet_email`='".$_SESSION['email']."'";
  $resc = mysqli_query($con, $qc);
echo "<script type='text/javascript'> window.location.href = 'signin.php'</script>";
  
}
?>