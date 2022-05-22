
<?php
$page = (isset($_GET['subpage']) && $_GET['subpage'] !='') ? $_GET['subpage'] : '';?>

<!DOCTYPE HTML>
<html>
<head>
    
    <link rel="stylesheet" href="style.css">
    </head>
    <style>
        body {
            
            background-image: url(images/px.gif);
            
        }
        
        
    </style>
<body>
    
   <div class="sidenav">
  <a href="index.php">Home</a>
  <a href="aboutme.php">Designer's Profile</a>
 
  <button class="dropdown-btn">Sample Works 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a class="active"  href="https://learningtaskhtmlmendoza.herokuapp.com/Midterm/INDEX.HTML" target="blank">CLE1</a>
    <a class="active"  href="https://learningtaskhtmlmendoza.herokuapp.com/Learningtask2/recipe.html" target="blank">Learning Task 2</a>
      <a class="active"  href="https://learningtaskhtmlmendoza.herokuapp.com/LearningTask3/Learningtask33.html" target="blank">Learning Task 3</a>
      <a class="active"  href="https://learningtaskhtmlmendoza.herokuapp.com/LearningTask4/Index%20(1).html" target="blank">Learning Task 4</a>
      <a class="active" href="https://github.com/VINCENTMNDZA/MENDOZA/tree/main/LearningTask5" target="blank">Learning Task 5</a>
  </div>

</div>

<div class="main">
  <center> 
  <h2>Hi! Know more about me!</h2>
    <img src="images/me.jpg" width="300" height="300">
    <p>This is me</p>
  <p>My name is John Vincent Mendoza</p>
  <p>I am from the class of BSIT-C</p>
  <p>University of St. Lasalle</p>
  <p> -End </p>
      </center> 
</div>

<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html> 