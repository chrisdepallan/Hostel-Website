<?php
session_start();
if($_SESSION['homeflag']==1&&$_SESSION['flag']==1){
  echo "<script> window.location.href = '".$_SESSION['url']."'</script>";
}else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link src="assets/css_js/signin.css" rel="stylesheet" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
    function myemail() {
      var n = document.getElementById("email");
      var em = /\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (n.value == "") {
        document.getElementById("consid0").innerHTML = "<span class='error'>Please enter a valid Email</span>";
        $('#submit').attr("disabled", true);
      } else if (!n.value.match(em)) {
        document.getElementById("consid0").innerHTML = "<span class='error'>This is not a valid Email. Please try again</span>";
        $('#submit').attr("disabled", true);
      } else if (n.value.match(em)) {
        document.getElementById("consid0").innerHTML = "<span class='error'></span>";
        $('#submit').attr("disabled", false);

      }
    }

    function password() {






      var n = document.getElementById("passwd");
      pa = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+~`|}{[\]:;“’<,>.?/\-])(?=.*[a-zA-Z]).{8,}$/;
      if (n.value == "") {
        document.getElementById("consid1").innerHTML = "<span class='error'>Please enter a valid password</span>";
        $('#submit').attr("disabled", true);
      } else if (!n.value.match(pa)) {
        document.getElementById("consid1").innerHTML = "<span class='error'>Password Must Be 8 Characters and contain both numbers And Letters/ Special character</span>";
        $('#submit').attr("disabled", true);

      } else if (n.value.match(pa)) {
        document.getElementById("consid1").innerHTxML = "<span class='error'></span>";
        $('#submit').attr("disabled", false);
      }
    }



    $(document).ready(function() {
      $('#email').keyup(function() {
        var username = $(this).val();
        var ad = /\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        r_uname = ad.test(username);
        if (username == "") {
          $('#consid0').html("<span class='text-danger'>Please enter a valid username </span>");
          $('#submit').attr("disabled", true);
        } else if (!r_uname) {
          $("#consid0").html("<span class='error'>Please enter a valid user name</span>");
          $('#submit').attr("disabled", true);
        } else {
          $.ajax({
            url: 'uservalidate.php',
            method: "POST",
            data: {
              username: username
            },
            success: function(data) {
              if (data != '0') {
                $('#consid00').html('<span class="text-success">Email verified</span>');

                $('#consid0').html('<span class="text-success"> </span>');

                $('#submit').attr("disabled", false);
              } else {

                $('#consid00').html('<span class="text-danger"> </span>');
                $('#consid0').html('<span class="text-danger">email not found </span>');
                $('#submit').attr("disabled", false);
              }
            }
          })
        }
      });
    });
  </script>
  <style>

  </style>
</head>

<body background="assets/images/signin_back2.jpg" style=''><!-- Section: Design Block -->

  <section class="text-center text-lg-start">
    <style>
      body {
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      .cascading-right {
        margin-right: -50px;
      }

      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4" style='transform:translate(100px,100px)'>
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
                background: hsla(0, 0%, 100%, 0.55);
                backdrop-filter: blur(30px);
                ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5"><img src="logo.png" style="border-radius:50%;width:100px;margin-left: -400px;">MODDERHUB
              </h2>
              <form action='#' method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="email" onkeyup="myemail()" name='email' required placeholder="name@example.com">
                      <label for="email">Email address</label>
                    </div>
                    <span id="consid0" style="position:absolute;color:red;"></span>
                    <span id="consid00" style="position:absolute;color:green;"></span>


                  </div>

                </div>

                <!-- Email input -->


                <!-- Password input -->

                <div class="form-floating col-md-6  mb-3">
                  <input type="password" maxlength="20" class="form-control" id="passwd" name='passwd' required placeholder="Password">
                  <label for="passwd">Password</label>
                </div>


                <!-- Submit button -->
                
                      
                  
                 
                <div class="d-flex align-items-center justify-content-center pb-4">
                  
                  <input placeholder='Sign in'  style='transform:translate(-10px,12px)' value='Sign in' type="submit" name='submit' id='submit' class="btn  btn-outline-danger btn-block mb-4">
               
                  <button type="button" class="btn btn-outline-danger" onclick="location.href='regis.php'">Create new </button>
                      <button type="button" class="btn btn-outline-danger" onclick="location.href='forgot password.php'">forgot password?</button>
                        
                </div>

                            
                <!-- Register buttons -->

              
            </div>
                <!-- Register buttons -->

              </form>
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="/assets/images/signin_img.jpg" class="w-100 rounded-4 shadow-4" alt="" />
        </div> -->
      </div>
    </div>
    <!-- Jumbotron -->
  </section>

  <!-- Section: Design Block -->
</body>

</html>

<?php

if (isset($_POST['submit'])) {
  $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);


  $email = $_POST["email"];
  $password = $_POST["passwd"];


  $query = "SELECT * FROM tbl_login_details WHERE `logdet_email`='$email' AND `logdet_password`='$password'";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);

  if ($count) {
    
    $row=mysqli_fetch_array($result);
    $id=$row['logdet_id'];
    $_SESSION['id']=$id;
    $_SESSION['flag']=1;
    $_SESSION['email']=$email;
    
    if($row['logdet_role']=='buyer'){
      if($row['logdet_status']=='1')
      echo "<script> window.location.href = 'home/index.php'</script>";
      else {
      echo "<script> alert('buyer is not verified')</script>";
      echo "<script type='text/javascript'> window.location.href = 'sendmailregis.php'</script>";  
    }
    }
    if($row['logdet_role']=='admin'){
      echo "<script> window.location.href = 'homeadmin/index.php'</script>";
    }
    if($row['logdet_role']=='merchant'){{

      if($row['logdet_status']=='1'){
      echo "<script> window.location.href = 'homemerchant/index.php'</script>";
      
    }else{
      echo "<script> alert('merchant not verified and banned from using')</script>";
      echo "<script> window.location.href = 'homemerchant/verify_license.php'</script>";
      }
    }

      
    }
    if($row['logdet_role']=='moderator'){
      if($row['logdet_status']=='1')
      echo "<script> window.location.href = 'dashboard/index.php'</script>";
      else
      echo "<script> alert('moderator  not verified')</script>";
      
    }
  } else {
    echo "<script> alert('the credentials are wrong')</script>";
  }
}}
?>
