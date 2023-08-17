<!DOCTYPE html>
<?php
session_start();
?>
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

    // function myemail() {
    //   var n = document.getElementById("email");
    //   var em = /^[A-Z0-9._%+-]+(@gmail.com)$/i;
    //   if (n.value == "") {
    //     document.getElementById("conside").innerHTML = "<span class='error'>Please enter a valid Email</span>";
    //     $('#submit').attr("disabled", true);
    //   } else if (!(n.value.match(em) )) {
    //     document.getElementById("conside").innerHTML = "<span class='error'>This is not a valid Email. Please try again</span>";
    //     $('#submit').attr("disabled", true);
    //   } else if ((n.value.match(em))) {
    //     document.getElementById("conside").innerHTML = "<span class='error'></span>";
    //     $('#submit').attr("disabled", false);

    //   }
    // }

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
    // function password(){
          
    //       var password  = document.getElementById('passwd').value;
    //       var passwordRGEX= /^[A-Za-z0-9!@#$%^&*]{6,16}$/;
    //       var passwordResult = passwordRGEX.test(password);
    //       let flag=0;
          
    //       if(passwordResult == false)
    //       { 
    //         document.getElementById("consid1").innerHTML = "<span> Please enter a vaild password</span>";
    //         flag=1;
            
    //       }
    //       else{
    //         document.getElementById("textp").innerHTML = "<span></span>";
            
    //       }
      
    //           }
      

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
    $(document).ready(function() {
      $('#email').keyup(function() {
        var username = $(this).val();
        var ad = /^[A-Z0-9._%+-]+(@gmail.com)$/i;
        r_uname = ad.test(username);
        if (username == "") {
          $('#consid01').html("<span class='error'>Please enter a valid username </span>");
          $('#submit').attr("disabled", true);
        } else if (!r_uname) {
          $("#consid01").html("<span class='error'>Please enter a valid user name</span>");
          $('#submit').attr("disabled", true);
        } else {
          $.ajax({
            url: 'uservalidate.php',
            method: "POST",
            data: {
              username: username
            },
            success: function(data) {
              if (data==0) {
                $('#consid001').html('<span class="text-success">Email valid</span>');

                $('#consid01').html('<span class="text-success"> </span>');

                $('#submit').attr("disabled", true);
              } else {

                $('#consid001').html('<span class="text-danger"> </span>');
                $('#consid01').html('<span class="text-danger">email already in use </span>');
                $('#submit').attr("disabled", false);
              }
            }
          })
        }
      });
    });

    $(document).ready(function() {
      $("#uname").keyup(function() {

        var uname = document.getElementById("uname").value
        var c_uname = /^[a-z_0-9]{3,20}$/
        r_uname = c_uname.test(uname)
        if (r_uname == false) {
          $("#consid0").text("Enter a valid Username");

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
          background-image: url('../signin_back.jpg');
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
            <h2 class="fw-bold mb-5">registration</h2>
            <form method="POST" action='' enctype='multipart/form-data'>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div style='transform:translate(0,40px)' class="form-floating mb-3">
                    <input style='' type="text" class="form-control" id="uname" name="uname" onkeyup="" placeholder="name@example.com">
                    <label for="uname">UserName</label>
                    <span id="consid0" style="position:sticky;color:red;"></span>
                  </div>

                </div>
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
              <div class='row'>

                <span id="consid1" style=""></span>
              </div>
              <!-- Email input -->
              <div class="form-floating mb-4">
                <input type="email" class="form-control" id="email" name='email' onkeyup='myemail()' placeholder="ename@gmailcom">
                <label for="email"> email@gmail.com</label>
              </div>
              <span id="conside" style="position:sticky;color:red;"></span>
              <span id="consid01" style="position:sticky;"></span>
              <span id="consid001" style="position:sticky;"></span>

              <!-- Password input -->
              <div class="form-floating mb-4">
                <input type="text" class="form-control" maxlength="10" id="phno" name='phno' onkeyup="myphno()" placeholder="name@example.com">
                <label for="phno">Phone</label>
              </div>
              <span id="considph" style="position:sticky;color:red;"></span>
              <div class="mb-3 ">
                <label for="file" class="form-label"><img src="pfp_add.png" style="height:50px;cursor: pointer;" alt=""></label>
                <input class="form-control" name='file' style="visibility:hidden" type="file" onchange='isImage()' id="file" required>
              </div>



              
              <!-- Checkbox -->

              <!-- Submit button -->
              <input type="submit" id='submit' value="Add Admin " name='submit' class="btn btn-outline-danger btn-block mb-4">

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
  $name = $_POST["uname"];
  $email = $_POST["email"];
  $password = $_POST["passwd"];
  $file = $_FILES["file"]["name"];
  $phno = $_POST["phno"];
  

  $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
  $qc = "select * from tbl_login_details where logdet_email='$email'";
  $resc = mysqli_query($con, $qc);
  $count = mysqli_num_rows($resc);
  if ($count == 0) {
    $query = "INSERT INTO `tbl_login_details`(`logdet_email`, `logdet_password`,logdet_role,`logdet_status`) VALUES ('$email','$password','admin',1)";
    $result = mysqli_query($con, $query);
    $_SESSION['email']=$email;
    $lid = mysqli_insert_id($con);

    $q = "INSERT INTO `tbl_reg_details`( `regdet_name`, `regdet_phone`, `regdet_photo`, `regdet_lid`) VALUES ('$name','$phno','$file','$lid')";
    // Check connection
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }
   

    $re = mysqli_query($con, $q);
    if ($re) {
      $target = "../uploads/";
      $tarpath = $target . basename($file);
      move_uploaded_file($_FILES["file"]["tmp_name"], $tarpath);
    }
    mysqli_close($con);
    echo "<script type='text/javascript'> window.location.href = '../home.php'</script>";
    exit();
  } else {
  }
}
?>