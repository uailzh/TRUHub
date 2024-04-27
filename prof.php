<!-- Created for COMP 3450 by Uail Zhukenov, Begimai Alisherova, Gurjit Kaur -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professor</title>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  

  <style>
    * {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
       background: #2385C4;
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 20px 100px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 100;
      transition: background-color 0.3s ease;
    }

    header.scrolled {
      background-color: rgba(0, 0, 0, 0.7);
    }

    .logo {
      font-size: 32px;
      text-decoration: none;
      font-weight: 700;
      color: black;
    }

    .navbar {
      display: flex;
    }

    .navbar a {
      font-size: 18px;
      font-weight: 500;
      text-decoration: none;
      margin-left: 50px;
      color: white;
      position: relative;
    }

    .navbar a::before {
      content: '';
      position: absolute;
      top: 100%;
      left: 0;
      width: 0;
      height: 2px;
      background: white;
    }
    
    

    .navbar a.current::before,
	.navbar a:hover::before {
  	width: 100%;
	}
	
    .intro {
      background-image: url('img/rateBack.svg');
      
      background-size: cover;
      background-position: center;
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

   #rate-button {
  position: absolute;
  bottom: 5%;
  left: 11%;
  background-color: #D5564A;
  color: white;
  padding: 10px 70px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: 500;
      font-size: 16px;
      transition: background-color 0.3s ease;
  z-index: 9; 
  cursor: pointer;    
      
}


.rate-prof-button {
position: absolute;
bottom: 7%;
left: 7%;
background-color: #D5564A;
color: white;
padding: 10px 70px;
border-radius: 20px;
text-decoration: none;
font-weight: 500;
font-size: 16px;
transition: background-color 0.3 ease;
z-index: 9;
cursor: pointer;
}

#rate-button:hover {
  background-color: #D24F8D;
}


 .offer {
  background-image: url('img/rateBack2.svg');
      
      background-size: cover;
      background-position: center;
  width: 100%;
  height: auto; /* Set a minimum height to cover the viewport */
  display: flex;
  justify-content: left;

  margin-top: 6%;
  position: relative;
  
  padding-bottom: 200px; /* Add padding to the bottom to prevent overlap with the fixed footer */
}

  .tags-container {
    
    padding: 20px;
    width: 60%;
    border-radius: 8px;
    margin-left: 5%;
    height: auto;
    
    
  }
  .tag {
    display: inline-block;
    background: #e0e0e0;
    padding: 15px 40px;
    margin: 5px;
    border-radius: 15px;
    font-weight: bold;
    cursor: poiner;
  }  
  
  .tag:hover {
    opacity: 0.7;
  }
  
  
   .feedback-container {
    width: 700px;
    display: block;
    padding: 20px;
    background: #D6F4FF;
    border-radius: 8px;
    margin-left: 7%;
    height: 380px;
  }
  .quality, .difficulty {
    display: inline-block;
    margin-right: 10px;
    padding: 10px;
    background: #e0e0e0;
    border-radius: 4px;
    text-align: center;
  }
  .quality { background: #79FAC5; }
  .difficulty { background: #cccccc; }
  .tag {
    display: inline-block;
    background: #eeeeee;
    padding: 5px 10px;
    margin: 5px;
    border-radius: 15px;
    font-weight: bold;
    cursor: pointer;
  }
  .tag:hover {
    background-color: #dddddd;
  }
  .thumbs {
    display: flex;
    align-items: center;
    margin-top: 10px;
  }
  .thumb {
    cursor: pointer;
    margin-right: 5px;
  }





.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 30000; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 10% auto; /* 10% from the top and centered */
  padding: 30px;
  border-radius: 8px;
  width: 60%; /* Could be more or less, depending on screen size */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add some shadow for depth */
  position: relative; /* Required for absolute positioning of close button */
  height: auto;
}

/* Close Button */
.close {
  color: #aaa;
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 24px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #333; /* Darken on hover */
  text-decoration: none;
  cursor: pointer;
}

/* Form Styling */
form {
  display: grid;
  grid-gap: 10px;
}

label {
  font-weight: bold;
  margin-bottom: 6px;
}

input[type="number"],
input[type="text"],
select {
  width: calc(100% - 24px); /* Adjust width for padding and border */
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 6px;
  box-sizing: border-box;
  font-size: 16px;
}

textarea {
  width: calc(100% - 24px); /* Adjust width for padding and border */
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 6px;
  box-sizing: border-box;
  font-size: 16px;
  resize: vertical; /* Allow vertical resizing */
}

select {
  appearance: none; /* Remove default appearance */
  padding-right: 30px; /* Add space for dropdown arrow */
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 24px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #45a049; /* Darken on hover */
}

/* Clear floats after the submit button */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}




/* Style for the review message */
#reviewMessage {
  display: none;
  position: fixed;
  z-index: 30000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.4);
}

.modal-review {
  background-color: #fefefe;
  padding: 20px;
  border-radius: 8px;
  position: absolute;
  z-index: 31000;
  left: calc(50% - 250px);
  top: calc(50% - 105px);
  width: 500px;
  height: 210px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.closerev {
  color: #aaa;
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 24px;
  font-weight: bold;
}

.closerev:hover,
.closerev:focus {
  color: #333;
  text-decoration: none;
  cursor: pointer;
}

.modal-review h2 {
  margin-bottom: 20px;
  color: #333; /* Darker text color */
  font-size: 24px; /* Larger font size */
  margin-top: 15px;
}

.modal-review p {
  margin-bottom: 10px;
  color: #666; /* Lighter text color */
  font-size: 16px; /* Smaller font size */
  line-height: 1.6; /* Improved line spacing */
}

/* When the modal is displayed, make it visible */
#reviewMessage.show {
  display: block;
}





.classes-container {
  width: 100%;
  height: auto; /* Set a minimum height to cover the viewport */
  display: flex;
  justify-content: left; /* Center the content horizontally */
  position: relative;
  overflow-y: auto; /* Allow vertical scrolling if content overflows */
  padding-bottom: 200px; /* Add padding to the bottom to prevent overlap with the fixed footer */
}

.classes-box {
  display: flex;
  flex-wrap: nowrap; /* Prevent wrapping of items */
  justify-content: flex-start; /* Align items horizontally to the left */
  margin-left: 7%;
  margin-top: 5%;
  width: 80%; /* Take up 80% of the container width */
}

.class-card {
  width: 250px; /* Fixed width */
  height: 250px; /* Fixed height */
  margin-right: 10px; /* Adjust margin for spacing */
  border-radius: 10px; /* Rounded corners */
  overflow: hidden; /* Hide any overflowing content */
  position: relative;
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Add transition effects */
}

.class-card:hover {
  transform: translateY(-5px); /* Lift the card on hover */
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Add a shadow on hover */
}

.class-card img {
  width: 100%; /* Make the image fill the card */
  height: 100%; /* Make the image fill the card */
  object-fit: cover; /* Cover the entire area of the card */
  transition: opacity 0.3s ease; /* Add transition effect for opacity */
}

.class-card:hover img {
  opacity: 0.8; /* Reduce opacity on hover */
}

.overlay-text {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background for text */
  color: #fff; /* Text color */
  padding: 10px; /* Add padding */
  text-align: center; /* Center align text */
  font-size: 16px; /* Adjust font size */
  font-weight: bold; /* Make text bold */
}










.footer {
  position: relative;
  width: 100%;
  background: #3586ff;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.ibb.co/wQZVxxk/wave.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}
    
  </style>
</head>

<body>

<?php
 

if (!isset($_SESSION['signedin'])) {  // If not signedin,
    include('login.php');
    exit;
}
?>


 <header class='header'>
    <a href='#' class="logo" id="logotip"><img src='img/logotip2.svg'></a>
    <nav class='navbar'>
      <a href='#' id='mainLink'>Home</a>
      <a href='#' class='current' id='rateProf'>Rate My Prof</a>
      <a href='#' id='coursesLink'>Courses</a>
      <a href='#' id='forumLink'>Forum</a>
      <a href='#' id='aboutLink'>About</a>
    </nav>
  </header>

   <div class="intro" data-aos="fade-in" data-aos-duration="2000" data-aos-once="true">
   <button id="rate-button" onclick="scrollToNextSection()">Learn More</button>
  </div>
  
<div class="offer" id="offer" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">

    <div class="tags-feedback-container">
        <div class="tags-container">
            <h1 style="color: white; margin-left: 2%; margin-top: 7%;"> Professor Attributes </h1>
            <div style="margin-top: 5%;">
                <div class="tag">INSPIRATIONAL</div>
                <div class="tag">GIVES GOOD FEEDBACK</div>
                <div class="tag">HILARIOUS</div>
                <div class="tag">AMAZING LECTURES</div>
                <div class="tag">CLEAR GRADING CRITERIA</div>
                <div class="tag">TOUGH QUIZZES</div>
                <div class="tag">SKIP CLASS? YOU WON'T PASS!</div>
                <div class="tag">GET READY TO READ</div>
            </div>
        </div>
        
        
        
        
        
        <h1 style="color: white; margin-left: 7%; margin-top: 1%; margin-bottom: 3%;"> Student Reviews </h1>
        

        <div class="feedback-container">
        
            <div class="quality">
                <strong>QUALITY</strong>
                <div>4.0</div>
            </div>
            <div class="difficulty">
                <strong>DIFFICULTY</strong>
                <div>3.0</div>
            </div>

           
            <p style="text-align: center; margin-bottom: 3%;">
                <strong>COMP 3020</strong><br></p>
             <p style="margin-bottom: 4%;">   Attendance: Mandatory | Would Take Again: Yes | Grade: A | Textbook: Yes
            </p>

            <p style="margin-bottom: 4%;">David is a great prof! He gives great feedback and a ton of suggestions even if you don't ask that many questions. He can be picky with the format of the homework and also for presentations. Overall, a wise choice! And please don't skip class and always do and submit his homework on time.</p>

		<div style="margin-bottom: 5%;">
            <div class="tag" style="background: #E39E21;">GIVES GOOD FEEDBACK</div>
            <div class="tag" style="background: #E39E21;">RESPECTED</div>
            <div class="tag" style="background: #E39E21;">PARTICIPATION MATTERS</div>
            
            </div>

            <div class="thumbs">
    <span class="thumb" onclick="updateThumbs('up')">
        <i class="fas fa-thumbs-up"></i>
    </span>
    <span id="like-count" style="margin-right: 3%;">7</span>
    <span class="thumb" onclick="updateThumbs('down')">
        <i class="fas fa-thumbs-down"></i>
    </span>
    <span id="dislike-count">2</span>
</div>

        </div>
        
        
        <div class="feedback-container" style="margin-top: 3%;">
        
            <div class="quality">
                <strong>QUALITY</strong>
                <div>5.0</div>
            </div>
            <div class="difficulty">
                <strong>DIFFICULTY</strong>
                <div>4.0</div>
            </div>

           
            <p style="text-align: center; margin-bottom: 3%;">
                <strong>COMP 3450</strong><br></p>
             <p style="margin-bottom: 4%;">   Attendance: Mandatory | Would Take Again: Yes | Grade: B+ | Textbook: No
            </p>

            <p style="margin-bottom: 4%;">Professor David is exceptional! His feedback is invaluable, and he offers insightful suggestions even without prompting. He can be meticulous with homework formats and presentations, but it only enhances the learning experience. </p>

		<div style="margin-bottom: 5%;">
            <div class="tag" style="background: #E39E21;">INSPIRATIONAL</div>
            <div class="tag" style="background: #E39E21;">HILARIOUS</div>
            <div class="tag" style="background: #E39E21;">TOUGH QUIZZES</div>
            
            </div>

            <div class="thumbs">
    <span class="thumb" onclick="updateThumbs2('up')">
        <i class="fas fa-thumbs-up"></i>
    </span>
    <span id="like-count2" style="margin-right: 3%;">6</span>
    <span class="thumb" onclick="updateThumbs2('down')">
        <i class="fas fa-thumbs-down"></i>
    </span>
    <span id="dislike-count2">1</span>
</div>
        
        
    </div>
    
    
    
    <button class="rate-prof-button" onclick="openReviewForm()"> Leave Review </button>
    
    
     
     
     <div id="reviewModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeReviewForm()">&times;</span>
    <form id="reviewForm">
      <label for="quality">Quality:</label>
      <input type="number" id="quality" name="quality" min="1" max="5" step="0.1" placeholder="1.0 - 5.0" required>
      <label for="difficulty">Difficulty:</label>
      <input type="number" id="difficulty" name="difficulty" min="1" max="5" step="0.1" placeholder="1.0 - 5.0" required>
      <label for="className">Class Name:</label>
      <input type="text" id="className" name="className" placeholder="COMP 3020" required>
      <label for="attendance">Attendance:</label>
      <select id="attendance" name="attendance" required>
        <option value="mandatory">Mandatory</option>
        <option value="optional">Optional</option>
      </select>
      <label for="wouldTakeAgain">Would Take Again:</label>
      <select id="wouldTakeAgain" name="wouldTakeAgain" required>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
      <label for="grade">Grade:</label>
      <select id="grade" name="grade" required>
        <option value="a">A+</option>
        <option value="aplus">A</option>
        <option value="am">A-</option>
        <option value="b">B+</option>
        <option value="bplus">B</option>
        <option value="bm">B-</option>
        <option value="cplus">C+</option>
        <option value="c">C</option>
        <option value="cm">C-</option>
        <option value="d">D</option>
        <option value="f">F</option>
        
      </select>
      <label for="textbook">Textbook:</label>
      <select id="textbook" name="textbook" required>
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
      <label for="comments">Comments:</label>
      <textarea id="comments" name="comments" rows="4" cols="50" required></textarea>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

       
</div>




<div id="reviewMessage">
  <div class="modal-review">
    <span class="closerev" onclick="closeReviewMessage()">&times;</span>
    <h2>Thank You for Your Review!</h2>
    <p>Your comment will be reviewed by our team and then posted.</p>
    <p>We appreciate your feedback!</p>
  </div>
</div>

</div>




        <h1 style="color: white; margin-left: 7%; margin-top: 5%;"> What classes am I teaching? </h1>
        

        <div class="classes-container">
        
        
         <div class="classes-box">
  	 <div class="class-card" id="classone">
      <img src='img/cs.png'>
      <div class="overlay-text">Web Design 3020</div>
    </div>
    <div class="class-card" id="classtwo">
      <img src='img/cs2.png'>
      <div class="overlay-text">Java 1140</div>
    </div>
    <div class="class-card" id="classthree">
      <img src='img/cs9.png'>
      <div class="overlay-text">Artificial Intelligence 4610</div>
    </div>
    <div class="class-card" id="classfour">
      <img src='img/cs10.png'>
      <div class="overlay-text">Machine Learning 3000</div>
    </div>
    </div>
        
        </div>




<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

    </ul>
    <p>&copy;2024 TRU Hub | All Rights Reserved</p>
  </footer>



  
	

  
 <form id='rateP' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='RatePage'>
    <input type='hidden' name='command' value='RateMyProf'>
    </form>
    
    <form id='about' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='RatePage'>
    <input type='hidden' name='command' value='About'>
    </form>
    
    <form id='courses' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='RatePage'>
    <input type='hidden' name='command' value='Courses'>
    </form>
    
    <form id='forum' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='RatePage'>
    <input type='hidden' name='command' value='Forum'>
    </form>
    
    <form id='main' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='RatePage'>
    <input type='hidden' name='command' value='Main'>
    </form>
     
     
     
      <form id='compClass' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompPage'>
    <input type='hidden' name='command' value='CompClass'>
    </form>
    
    <form id='compClass2' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompPage'>
    <input type='hidden' name='command' value='CompClass2'>
    </form>
    
    <form id='compClass3' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompPage'>
    <input type='hidden' name='command' value='CompClass3'>
    </form>
     
  
  
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>



	var modal = document.getElementById("reviewModal");

// Get the button that opens the modal
var btn = document.querySelector("button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
function openReviewForm() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// When the user submits the form, you can handle the data accordingly
document.getElementById("reviewForm").addEventListener("submit", function(event){
  event.preventDefault(); // prevent the form from submitting
  // You can now access the form data using document.getElementById or other methods
  // For example:
  var quality = document.getElementById("quality").value;
  var difficulty = document.getElementById("difficulty").value;
  var className = document.getElementById("className").value;
  var attendance = document.getElementById("attendance").value;
  var wouldTakeAgain = document.getElementById("wouldTakeAgain").value;
  var grade = document.getElementById("grade").value;
  var textbook = document.getElementById("textbook").value;
  var comments = document.getElementById("comments").value;

  // You can now do whatever you want with this data, like sending it to a server
  // or displaying it on the page
  
  // For now, let's just log it to the console
  console.log("Quality: " + quality);
  console.log("Difficulty: " + difficulty);
  console.log("Class Name: " + className);
  console.log("Attendance: " + attendance);
  console.log("Would Take Again: " + wouldTakeAgain);
  console.log("Grade: " + grade);
  console.log("Textbook: " + textbook);
  console.log("Comments: " + comments);

  // Close the modal after submission
  modal.style.display = "none";
});





// Add this function to close the review message when clicking outside of it
window.addEventListener("click", function(event) {
  var modal = document.getElementById("reviewMessage");
  if (event.target == modal) {
    modal.style.display = "none";
  }
});

// Add this code to close the review message when clicking on the close button
function closeReviewMessage() {
  document.getElementById("reviewMessage").style.display = "none";
}

// Add this code to show the review message after form submission
document.getElementById("reviewForm").addEventListener("submit", function(event){
  event.preventDefault(); // prevent the form from submitting
  // Display the review message
  document.getElementById("reviewMessage").classList.add("show");
});



	
	 function updateThumbs(type) {
    var likeCountEl = document.getElementById('like-count');
    var dislikeCountEl = document.getElementById('dislike-count');
    if(type === 'up') {
      likeCountEl.textContent = parseInt(likeCountEl.textContent) + 1;
    } else {
      dislikeCountEl.textContent = parseInt(dislikeCountEl.textContent) + 1;
    }
  }
  
  function updateThumbs2(type) {
    var likeCountEl2 = document.getElementById('like-count2');
    var dislikeCountEl2 = document.getElementById('dislike-count2');
    if(type === 'up') {
      likeCountEl2.textContent = parseInt(likeCountEl2.textContent) + 1;
    } else {
      dislikeCountEl2.textContent = parseInt(dislikeCountEl2.textContent) + 1;
    }
  }




    document.getElementById('rateProf').addEventListener('click', function() {
        document.getElementById('rateP').submit();
    });
    
     document.getElementById('aboutLink').addEventListener('click', function() {
        document.getElementById('about').submit();
    });
    
     document.getElementById('coursesLink').addEventListener('click', function() {
        document.getElementById('courses').submit();
    });
    
     document.getElementById('forumLink').addEventListener('click', function() {
        document.getElementById('forum').submit();
    });

	 document.getElementById('mainLink').addEventListener('click', function() {
        document.getElementById('main').submit();
    });
    
     document.getElementById('logotip').addEventListener('click', function() {
        document.getElementById('main').submit();
    });
    
    
     document.getElementById('classone').addEventListener('click', function() {
        document.getElementById('compClass').submit();
    });
    
     document.getElementById('classtwo').addEventListener('click', function() {
        document.getElementById('compClass3').submit();
    });
    
     document.getElementById('classthree').addEventListener('click', function() {
        document.getElementById('compClass2').submit();
    });
    
     document.getElementById('classfour').addEventListener('click', function() {
        document.getElementById('compClass').submit();
    });
    
    



//add/remove the 'scrolled' class based on scroll position
    window.addEventListener('scroll', function () {
      var header = document.querySelector('header');
      header.classList.toggle('scrolled', window.scrollY > 0);
    });
    
    function scrollToNextSection() {
    // Get the element with the specified id
    var nextSection = document.getElementById('offer');

    // Scroll to the top of the next section smoothly with a slower duration (e.g., 1000 milliseconds)
    nextSection.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'nearest', duration: 10000 });
  }
    
    
 AOS.init({
      duration: 3000,
      once: true,
    });
    
    
    
</script>

</body>



</html>
