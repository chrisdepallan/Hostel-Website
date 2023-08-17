<!DOCTYPE html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
.rating {
  display: flex;
  flex-direction: row-reverse; /* Reverse the order of stars */
  justify-content: flex-start;
}

.rating input[type="radio"] {
  display: none;
}

.rating label {
  font-size: 30px;
  color: gray;
  cursor: pointer;
  margin-right: 10px;
}

.rating label:before {
  content: "\2605";
  display: inline-block;
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}

.rating input[type="radio"]:checked ~ label:before {
  color: gold;
}




</style>
<script>

const stars = document.querySelectorAll('.rating input[type="radio"]');

stars.forEach(star => star.addEventListener('click', function() {
  const currentStar = this;
  const previousStars = Array.from(stars).slice(0, stars.indexOf(currentStar));
  previousStars.forEach(star => star.checked = true);
}));


</script>
</head>
<body><div class="rating">
  <input type="radio" name="rating" id="star5" value="1">
  <label for="star5"></label>
  <input type="radio" name="rating" id="star4" value="2">
  <label for="star4"></label>
  <input type="radio" name="rating" id="star3" value="3">
  <label for="star3"></label>
  <input type="radio" name="rating" id="star2" value="4">
  <label for="star2"></label>
  <input type="radio" name="rating" id="star1" value="5">
  <label for="star1"></label>
</div>


</body>
