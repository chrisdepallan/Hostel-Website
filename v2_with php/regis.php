<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>/* Modal styles */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black background with opacity */
}
.modal-content {
  background-color: #fefefe;
  margin: 10% auto; /* 10% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
<script>
// Get the modal
window.onload = function() {
  // Your JavaScript code here
var modal = document.getElementById("myModal");

// Get the checkbox that triggers the modal
var checkbox = document.getElementById("termsCheck");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the checkbox, open the modal
checkbox.onclick = function() {
  if (checkbox.checked) {
    modal.style.display = "block";
  }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  checkbox.checked = false;
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    checkbox.checked = false;
  }
}

// If user agrees, store the agreement in local storage and close the modal
var agree = document.getElementById("agreeBtn");
agree.addEventListener("click", function() {
  localStorage.setItem("termsAgreed", "true");
  modal.style.display = "none";
  checkbox.checked = true;
});

// If user disagrees, uncheck the checkbox and close the modal
var disagree = document.getElementById("disagreeBtn");
disagree.addEventListener("click", function() {
  localStorage.setItem("termsAgreed", "false");
  modal.style.display = "none";
  checkbox.checked = false;
});

};
</script>

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
        case 'jpeg':
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
                <input type="email" class="form-control" id="email" name='email' onkeyup='myemail()' placeholder="name@example.com">
                <label for="email">email address (mail@gmail.com)</label>
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



              <div class="col-md-6 mb-4">
                  <div class="form-floating mb-3">
                    <div class="form-floating mb-3">
                    <input class="form-check-input" type="radio" name="radio" checked value='buyer' id="radio">
    buyer   
 
                    <input class="form-check-input" type="radio" value='merchant'name="radio" id="radio">
  
    merchant  
                  
                  </div>
                </div>
              <!-- Checkbox -->

              <!-- Modal -->
<!-- Checkbox to agree to terms and conditions -->
<input type="checkbox" id="termsCheck" name="termsCheck" required>
<label for="termsCheck">I agree to the terms and conditions</label>

<!-- Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Terms and Conditions</h2><br><br>
    <p>Welcome to ModderHub, an online platform for buying and selling car parts. By using our website, you agree to comply with the following terms and conditions, which govern the relationship between ModderHub and its users. Please read them carefully before using our services.
<br>
<strong> General</strong><br>

1.1. ModderHub is an e-commerce platform that enables buyers and sellers to trade car parts online.<br>

1.2. By registering as a user of ModderHub, you confirm that you have read, understood, and agreed to these terms and conditions, as well as our Privacy Policy.
<br>
1.3. ModderHub reserves the right to modify these terms and conditions at any time, with or without notice to you. Your continued use of our website after any changes will constitute your acceptance of the revised terms.
<br>
<b>Buying on ModderHub</b>
<br>
2.1. To purchase items on ModderHub, you must be a registered user and have a valid payment method on file.
<br>
2.2. All transactions are processed through our secure payment gateway. ModderHub does not store your credit card or bank account information.
<br>
2.3. The prices of items on ModderHub are subject to change without notice. ModderHub does not guarantee the accuracy of pricing information displayed on our website.
<br>
2.4. ModderHub does not guarantee the quality or condition of items sold by third-party sellers. Buyers are responsible for inspecting items before purchasing them.
<br>
2.5. ModderHub does not offer refunds or returns for items purchased on our platform. However, buyers may be entitled to refunds or returns under applicable consumer protection laws.
<br>
<b> Selling on ModderHub </b>
<br>
3.1. To sell items on ModderHub, you must be a registered user and comply with our seller guidelines.
<br>
3.2. Sellers are responsible for accurately describing items for sale and ensuring that they are in good condition.
<br>
3.3. Sellers must ship items promptly and provide buyers with tracking information.
<br>
3.4. ModderHub charges a commission fee on all sales made through our platform. The commission fee is calculated as a percentage of the sale price and is subject to change without notice.
<br>
3.5. Sellers may be liable for any damages or losses incurred by buyers as a result of defective or misrepresented items.
<br>
<b>User Conduct</b>
<br>
4.1. By using ModderHub, you agree to comply with all applicable laws and regulations, as well as these terms and conditions.
<br>
4.2. You must not use our website for any unlawful or fraudulent activities, or to transmit any harmful or offensive content.
<br>
4.3. ModderHub reserves the right to suspend or terminate your account at any time, with or without notice, for any violation of these terms and conditions.
<br>
<b>Intellectual Property</b>
<br>
5.1. ModderHub and its licensors own all intellectual property rights in our website and its contents, including text, graphics, logos, and software.
<br>
5.2. You must not use, reproduce, or distribute any content from ModderHub without our prior written consent.
<br>
<b>Disclaimer of Warranties
</b>
<br>
6.1. ModderHub does not warrant that our website will be uninterrupted or error-free, or that any defects will be corrected.
<br>
6.2. ModderHub does not make any representations or warranties about the quality or reliability of any items sold on our platform.
<br>
<b>Limitation of Liability
  </b><br>
7.1. ModderHub is not liable for any damages or losses incurred by users as a result of using our website, including but not limited to lost profits, lost data, or punitive damages.</p>
<br><p>7.2. In no event shall ModderHub's liability to any user exceed the amount paid by the user to ModderHub for the use of our services.
<br>
<b>
Indemnification
  </b>
  <br>
8.1. You agree to indemnify and hold ModderHub, its affiliates, and their respective officers, directors, employees, and agents, harmless from any claims, damages, or expenses (including attorneys' fees) arising from your use of our website or any violation of these terms and conditions.
<br><b>
Governing Law and Dispute Resolution
  </b><br>
9.1. These terms and conditions shall be governed by and construed in accordance with the laws of the state of California, without regard to its conflicts of law principles.
<br>
9.2. Any dispute arising out of or relating to these terms and conditions or your use of ModderHub shall be resolved through binding arbitration in accordance with the rules of the American Arbitration Association.
<br><b>
Miscellaneous
  </b><br>
10.1. These terms and conditions, together with our Privacy Policy, constitute the entire agreement between you and ModderHub with respect to your use of our website.
<br>
10.2. If any provision of these terms and conditions is found to be invalid or unenforceable, the remaining provisions shall remain in full force and effect.
<br>
10.3. ModderHub's failure to enforce any right or provision of these terms and conditions shall not constitute a waiver of such right or provision.</p>
<br>   <button class='form-control' style='width:200px' id="agreeBtn">Agree</button>
    <button class='form-control' style='width:200px' id="disagreeBtn">Disagree</button>
  </div>
</div>

<br><br>

              <!-- Submit button -->
              <input type="submit" id='submit' value="Sign Up" name='submit' class="btn btn-outline-danger btn-block mb-4">

              </input>
<br>
              <!-- Register buttons -->
              <div class="d-flex align-items-center justify-content-center pb-4">
                <p class="mb-0 me-2"></p>
                <button type="button" class="btn btn-outline-danger" onclick="location.href='home.php'">sign in</button>
                          
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
  $name = $_POST["uname"];
  $email = $_POST["email"];
  $password = $_POST["passwd"];
  $file = $_FILES["file"]["name"];
  $phno = $_POST["phno"];
  $radio = $_POST["radio"];

  $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
  $qc = "select * from tbl_login_details where logdet_email='$email'";
  $resc = mysqli_query($con, $qc);
  $count = mysqli_num_rows($resc);
  if ($count == 0) {
    $query = "INSERT INTO `tbl_login_details`(`logdet_email`, `logdet_password`,logdet_role,`logdet_status`) VALUES ('$email','$password','$radio',0)";
    $result = mysqli_query($con, $query);
    $_SESSION['email']=$email;
    $lid = mysqli_insert_id($con);

    $q = "INSERT INTO `tbl_reg_details`( `regdet_name`, `regdet_phone`, `regdet_photo`, `regdet_lid`) VALUES ('$name','$phno','$file','$lid')";
    // Check connection
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }
    if($radio=='buyer'){
      $queryw="UPDATE `tbl_login_details` SET `logdet_status`='1' WHERE logdet_id='$lid'";
      $resc = mysqli_query($con, $queryw);
    }

    $re = mysqli_query($con, $q);
    if ($re) {
      $target = "uploads/";
      $tarpath = $target . basename($file);
      move_uploaded_file($_FILES["file"]["tmp_name"], $tarpath);
    }
    mysqli_close($con);
    echo "<script type='text/javascript'> window.location.href = 'sendmailregis.php'</script>";
    exit();
  } else {
  }
}
?>