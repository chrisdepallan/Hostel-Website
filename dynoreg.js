function validate(){
    var username  = document.getElementById('uname').value;
    var password  = document.getElementById('passwd').value;
    var name  = document.getElementById('Name').value;
    var email  = document.getElementById('email').value;
    var phoneNumber = document.getElementById('phno').value;
    let flag=0;
    var usernameRGEX= /^[A-Za-z0-9]+$/;
    var passwordRGEX= /^[A-Za-z0-9!@#$%^&*]{6,16}$/;
    var nameRGEX=/^[a-zA-Z ]{2,30}$/;
    var emailRGEX=/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var phoneRGEX = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
    

    var nameResult = nameRGEX.test(name);
    var emailResult = emailRGEX.test(email);
    var phoneResult = phoneRGEX.test(phoneNumber);
    var usernameResult = usernameRGEX.test(username);
    var passwordResult = passwordRGEX.test(password);
    
    if(usernameResult == false)
    {
      alert('Please enter valid username{rules:a-Z,0-9}');
      
       flag=1;
    }

    if(passwordResult == false)
    {
      alert('Please enter a vaild password{rules:a-Z,0-9,!,@,#,$,%,^,&,*}');
     flag=1;
      
    }
    if(nameResult==false){
      alert('please enter a vaild name{rules:a-Z(2-30)}');
      flag=1;
    }
    
    if(emailResult==false){
      alert('please enter a vaild email{rules:a-z,0,9._%+-@___.__}');
      flag=1;
    }
    
    if(phoneResult==false){
      alert('please enter a vaild name{rules:0-9(10)}');
      flag=1;
    }
    if(flag==0){
      alert("The fields are correct! the form is accepted to be processed.");  
      
    }
    else{
      alert("The fields are incorrect! The form will be rejected");
    }
    
  }

 