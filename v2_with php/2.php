<!DOCTYPE html>
<head>
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
</head>
<body>
    
<!-- Checkbox to agree to terms and conditions -->
<input type="checkbox" id="termsCheck" name="termsCheck">
<label for="termsCheck">I agree to the <a href="#">terms and conditions</a></label>

<!-- Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Terms and Conditions</h2>
    <p>Here are the terms and conditions of our website. Please read them carefully before using our services.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempor nisl euismod velit consectetur bibendum. Nullam maximus justo sed mauris posuere, vel congue nulla vulputate. Suspendisse posuere felis ac dolor eleifend, eu tempus dolor faucibus. Vestibulum in consequat velit. Duis porttitor quam vel dui elementum, quis efficitur odio gravida. Nulla non lorem non dolor tristique tristique in sit amet neque. In hac habitasse platea dictumst.</p>
    <button id="agreeBtn">Agree</button>
    <button id="disagreeBtn">Disagree</button>
  </div>
</div>

</body>
</html>