<?php

session_start();

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
        $(document).ready(function() {
      $('#email').keyup(function() {
        var username = $(this).val();
        var ad = /\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        r_uname = ad.test(username);
        if (username == "") {
            $('#consid00').html('<span class="text-success"></span>');

          $('#consid0').html("<span class='error'>Please enter a valid email </span>");
          $('#submit').attr("disabled", true);
        } else if (!r_uname) {
            $('#consid00').html('<span class="text-success"></span>');
          $("#consid0").html("<span class='error'>Please enter a valid user email</span>");
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

                $('#submit').attr("disabled", true);
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
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right" style="
                background: hsla(0, 0%, 100%, 0.55);
                backdrop-filter: blur(30px);
                ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5"><img src="logo.png" style="border-radius:50%;width:100px;margin-left: -400px;">MODDERHUB
                            </h2>
                            <form action='' method='POST'>
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
                                <!-- Submit button -->
                                <input value='submit' type="submit" id='emailsubmit' name='submit' class="btn  btn-outline-danger btn-block mb-4">
                            </form>

                            <div class="d-flex align-items-center justify-content-center pb-4">
                                <p class="mb-0 me-2">Don't have an account?</p>
                                <button type="button" class="btn btn-outline-danger" onclick="location.href='regis.php'">Create new </button>
                                          
                            </div>
                            <!-- Register buttons -->


                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="/assets/images/signin_img.jpg" class="w-100 rounded-4 shadow-4" alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>

    <!-- Section: Design Block -->
</body>

</html>
<?php
if(isset($_POST['submit'])){
    $_SESSION['email']=$_POST['email'];
   

    echo "<script type='text/javascript'> window.location.href = 'sendmailforgot.php'</script>";
}
?>