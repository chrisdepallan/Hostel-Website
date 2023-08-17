<?php
session_start()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
</head>
<body>
</script>
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
        }

        table {
            font-family: Poppins Medium;
            font-size: 15px;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        .banner {
            width: 100%;
            height: 996px;
            background-attachment: fixed;
            background-image: linear-gradient(rgba(19, 29, 30, 0.75), rgba(214, 0, 185, 0.73)), url(banner3.png);
            background-size: cover;
            background-position: center;

        }
        .form {
            margin-top: 170px;
        }
        .border{
            background-image:linear-gradient(to right,#9FA5D5,#E8F5C8);
            
        margin-top:-150px;
        margin-left: 22%;
        width: 880px;
        height: 800px;
        border-radius: 12px;
        padding: 50px 0;
        }
        .acc {
           margin-left: 48x;
           margin-top: 15px ;
           font-family: myron;
           font-size:20px;
            }
    </style>
    <script>
        function myname() {
            var n = document.getElementById("txt1");
           var na =/^[a-zA-Z]{2,}(?: [a-zA-Z]+)?(?: [a-zA-Z]+)?$/;
			if (n.value == "") {
				document.getElementById("consid").innerHTML = "<span class='error'>Please enter a valid First name</span>";
                $('.btn').attr("disabled", true);
			}
			else if (!n.value.match(na)) {
				document.getElementById("consid").innerHTML = "<span class='error'>This is not a valid  name. Please try again</span>";
                   $('.btn').attr("disabled", true);
			}
			else if (n.value.match(na)) {
				document.getElementById("consid").innerHTML = "<span class='error'></span>";
                $('.btn').attr("disabled", false);
			}
		}
        
        // function mylastname() {
        //     var g = document.getElementById("txt2");
        //    var ad = /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/;
		// 	if (g.value == "") {
		// 		document.getElementById("consid2").innerHTML = "<span class='error'>Please enter a valid Last name</span>";
		// 	}
		// 	else if (!g.value.match(ad)) {
		// 		document.getElementById("consid2").innerHTML = "<span class='error'>This is not a valid Last name. Please try again</span>";
		// 	}
		// 	else if (g.value.match(ad)) {
        //         document.getElementById("consid2").innerHTML = "<span class='error'></span>";

          
		// 	}
		// }
$(document).ready(function(){ 
$('#txt2').keyup(function(){
var username = $(this).val();
var ad = /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/;
r_uname=ad.test(username);
if(username ==""){
$('#consid2').html("<span class='error'>Please enter a valid username </span>");
$('.btn').attr("disabled", true);
}
else if (!r_uname) {
                $("#consid2").html("<span class='error'>Please enter a valid user name</span>");
                $('.btn').attr("disabled", true);
            } else {
                
$.ajax({
url:'usernamevalidation.php',
method:"POST",
data:{username:username},
success:function(data)
{
if(data != '0')
{
$('#consid2').html('<span class="text-danger">Username Already exist</span>');
$('.btn').attr("disabled", true);
}
else
{
$('#consid2').html('<span class="text-success">Username valid</span>');
$('.btn').attr("disabled", false);
}
}
})
}
});
});
        function myemail() {
            var n = document.getElementById("inputEmail");
           var em = /\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if (n.value == "") {
				document.getElementById("consid4").innerHTML = "<span class='error'>Please enter a valid Email</span>";
                $('.btn').attr("disabled", true);
			}
			else if (!n.value.match(em)) {
				document.getElementById("consid4").innerHTML = "<span class='error'>This is not a valid Email. Please try again</span>";
                $('.btn').attr("disabled", true);
			}
			else if (n.value.match(em)) {
				document.getElementById("consid4").innerHTML = "<span class='error'></span>";
                $('.btn').attr("disabled", false);
                
			}
		}
        function myphno() {
            var n4 = document.getElementById("txt3");
            var p = /([6789][0-9]{9,10})+$/;
            
            if (n4.value == "") {
				document.getElementById("consid3").innerHTML = "<span class='error'>Please enter a valid phone number</span>";
                $('.btn').attr("disabled", true);
			}
			else if (!n4.value.match(p)) {
				document.getElementById("consid3").innerHTML = "<span class='error'>This is not a valid phone number. Please try again</span>";
                $('.btn').attr("disabled", true);
			}
			else if (n4.value.match(p)) {
				document.getElementById("consid3").innerHTML = "<span class='error'></span>";
                $('.btn').attr("disabled", false);
			}
		}
        function password() {
			var n = document.getElementById("psswd");
			pa = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
			if (n.value == "") {
				document.getElementById("consid5").innerHTML = "<span class='error'>Please enter a valid password</span>";
                $('.btn').attr("disabled", true);
			}
			else if (!n.value.match(pa)) {
				document.getElementById("consid5").innerHTML = "<span class='error'>Password Must Be 6-20 Characters and contain both numbers And Letters/ Special character</span>";
                $('.btn').attr("disabled", true);
                
			}
			else if (n.value.match(pa)) {
				document.getElementById("consid5").innerHTML = "<span class='error'></span>";
                $('.btn').attr("disabled", false);
			}
		}
        function cpassword()
        {
          var n7=document.getElementById("psswd");
          var n8=document.getElementById("cpsswd");
          pa = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
          if(n8.value == "")
          {
            document.getElementById("consid6").innerHTML = "<span class='error'>Please enter a valid password</span>";
            $('.btn').attr("disabled", true);
        }
        else if(n7.value!=n8.value)
        {
          document.getElementById("consid6").innerHTML = "<span class='error'> Password Missmatch</span>";
          $('.btn').attr("disabled", true);
              
        }
        else if(n7.value==n8.value && n7.value.match(pa))
        {

          document.getElementById("consid6").innerHTML = "<span class='error'></span>";
          $('.btn').attr("disabled", false);
            
        }
    }
    
    function pro() {
            var fileInput =
                document.getElementById('profile');
             
            var filePath = fileInput.value;

            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)+$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                document.getElementById("consid11").innerHTML = "<span class='error'>Only jpg, jpeg and png files are allowed</span>";
                $('.btn').attr("disabled", true);
            }
            else
            {
                
                document.getElementById("consid11").innerHTML = "<span class='error'></span>";
                $('.btn').attr("disabled", false);
            }
            
        
    }
    
    </script>   
</body>
</html>