<!-- Created for COMP 3450 by Uail Zhukenov, Begimai Alisherova, Gurjit Kaur -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COMP Department</title>
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
      background-image: url('img/comp.svg');
      
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
  bottom: 330px;
  left: 80px;
  background-color: #D24F8D;
  color: white;
  padding: 10px 70px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: 500;
      font-size: 16px;
      transition: background-color 0.3s ease;
  z-index: 9999; 
  cursor: pointer;    
      
}


#back-button {
  position: fixed;
  bottom: 2%;
  left: 2%;
  background-color: #D5564A;
  color: white;
  padding: 10px 45px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: 500;
      font-size: 16px;
      transition: background-color 0.3s ease;
  z-index: 9999; 
  cursor: pointer;    
      
}


#rate-button:hover {
  background-color: #D5564A;
}


 .offer {
  background-image: url('img/comp2.svg');
  background-size: cover;
  background-position: center;
  width: 100%;
  height: 1100px; /* Set a minimum height to cover the viewport */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
  overflow-y: auto; /* Allow vertical scrolling if content overflows */
  padding-bottom: 200px; /* Add padding to the bottom to prevent overlap with the fixed footer */
}



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
      background-image: url('img/comp.svg');
      
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
  bottom: 290px;
  left: 80px;
  background-color: #D24F8D;
  color: white;
  padding: 10px 70px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: 500;
      font-size: 16px;
      transition: background-color 0.3s ease;
  z-index: 9999; 
  cursor: pointer;    
      
}


#back-button {
  position: fixed;
  bottom: 2%;
  left: 2%;
  background-color: #D5564A;
  color: white;
  padding: 10px 45px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: 500;
      font-size: 16px;
      transition: background-color 0.3s ease;
  z-index: 9999; 
  cursor: pointer;    
      
}


#rate-button:hover {
  background-color: #D5564A;
}


 .offer {
  background-image: url('img/comp2.svg');
  background-size: cover;
  background-position: center;
  width: 100%;
  height: 1000px; /* Set a minimum height to cover the viewport */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
  overflow-y: auto; /* Allow vertical scrolling if content overflows */
  margin-bottom: 100px;
}


 .container2 {
  display: flex;
  flex-wrap: wrap; /* Allow wrapping of items to the next row */
  justify-content: center; /* Align items horizontally in center */
}

.cardings {
  width: calc(15% - 20px); /* 20% minus the gap */
  margin: 10px; /* Adjust margin for spacing */
  border-radius: 10px; /* Rounded corners */
  overflow: hidden; /* Hide any overflowing content */
  position: relative;
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Add transition effects */
}

.cardings:hover {
  transform: translateY(-5px); /* Lift the carding on hover */
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Add a shadow on hover */
}

.cardings img {
  width: 100%; /* Make the image fill the carding */
  height: 100%; /* Make the image fill the carding */
  object-fit: cover; /* Cover the entire area of the carding */
  transition: opacity 0.3s ease; /* Add transition effect for opacity */
}

.cardings:hover img {
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




	* {
  -webkit-font-smoothing: antialiased;
  color: #acbdce;
}

:root {
  --border-radius: 10px;
}


.Card {
  padding: 1px;
  border-radius: var(--border-radius);
  background: linear-gradient(-67deg, rgba(#c8d8e7, .7), rgba(255,255,255,.8));
  overflow: hidden;
  box-shadow: 
    -2px -2px 6px rgba(#fff, .6),
    2px 2px 12px #c8d8e7;
  width: 450px;
  
  position: absolute;
  bottom: 26%;
  left: calc(50% - 225px);
}

.CardInner {
  padding: 16px 16px;
  background-color: #e2e9f4;
  border-radius: var(--border-radius);
}

.container {
  display: flex;
 
}

.Icon {
  min-width: 46px;
  min-height: 46px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: var(--border-radius);
  margin-right: 12px;
  box-shadow: 
    -2px -2px 6px rgba(#fff, .6),
    2px 2px 12px #c8d8e7;
    cursor: pointer;
  transition: color 0.3s ease;
    
  svg {
    transform: translate(-1px, -1px);    
  }
}

svg:hover {
transform: scale(1.2);
}


.InputContainer {
  width: 100%;
}

input {
  background-color: #e3edf7;
  padding: 16px 32px;
  border: none;
  display: block;
  font-family: 'Orbitron', sans-serif;
  font-weight: 600;
  color: #a9b8c9;
  -webkit-appearance: none;
  transition: all 240ms ease-out;
  width: 100%;
  
  &::placeholder {
    color: #6d7f8f;
  }
  
  &:focus {
    outline: none;
    color: #6d7f8f;
    background-color: lighten(#e3edf7, 3%);
  }
};
  
.InputContainer {
  --top-shadow: inset 1px 1px 3px #c5d4e3, inset 2px 2px 6px #c5d4e3;
  --bottom-shadow: inset -2px -2px 4px rgba(255,255,255, .7);
  
  position: relative;
  border-radius: var(--border-radius);
  overflow: hidden;
  
  &:before,
  &:after {
    left: 0;
    top: 0;
    display: block;
    content: "";
    pointer-events: none;
    width: 100%;
    height: 100%;
    position: absolute;
  }
  
  &:before {
    box-shadow: var(--bottom-shadow);
  }
  
  &:after {
    box-shadow: var(--top-shadow);
  }
}


#classes {
  opacity: 0; /* Initially set opacity to 0 */
  height: 0; /* Initially set height to 0 */
  overflow: hidden; /* Hide the content */
  transition: opacity 0.3s ease, height 0.3s ease; /* Add transition effect */
  background-color: #e2e9f4;
  padding: 20px;
  border-radius: 10px;
  margin-top: 4px;
  position: absolute;
  width: 445px;
  position: absolute;
  bottom: 7%;
  left: calc(50% - 222px);
}


#classes a {
  display: block; /* Make the links block-level for spacing */
  color: #657789; /* Set text color */
  padding: 10px; /* Add padding for spacing */
  border-radius: 5px; /* Apply border radius for rounded corners */
  margin-bottom: 10px; /* Add margin between each link */
  text-decoration: none; /* Remove underline */
  transition: background-color 0.3s ease; /* Smooth transition on hover */
  
}

#classes a:hover {
  background-color: #d3dce6; /* Change background color on hover */
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
      <a href='#' id='rateProf'>Rate My Prof</a>
      <a href='#' id='coursesLink'>Courses</a>
      <a href='#' id='forumLink'>Forum</a>
      <a href='#' id='aboutLink'>About</a>
    </nav>
  </header>
  
  <button id="back-button">Go Back</button>

   <div class="intro" data-aos="fade-in" data-aos-duration="2000" data-aos-once="true">
   <button id="rate-button" onclick="scrollToNextSection()">Search classes</button>
  </div>
  
  <div class="offer" id="offer" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
  
  <div class="container2">
  	 <div class="cardings" id="compButton">
      <img src='img/cs.png'>
      <div class="overlay-text">Web Design 3020</div>
    </div>
    <div class="cardings" id="compButton1">
      <img src='img/cs2.png'>
      <div class="overlay-text">Java 1140</div>
    </div>
    <div class="cardings" id="compButton2">
      <img src='img/cs3.png'>
      <div class="overlay-text">C# Development 2010</div>
    </div>
    <div class="cardings" id="compButton3">
      <img src='img/cs9.png'>
      <div class="overlay-text">Artificial Intelligence 4610</div>
    </div>
    <div class="cardings" id="compButton4">
      <img src='img/cs10.png'>
      <div class="overlay-text">Machine Learning 3000</div>
    </div>
    
    </div>
    
    <div class="container2">
     <div class="cardings" id="compButton5">
      <img src='img/cs5.png'>
      <div class="overlay-text">Operating Systems 3450</div>
    </div>
    <div class="cardings" id="compButton6">
      <img src='img/cs6.png'>
      <div class="overlay-text">Database Management 3260</div>
    </div>
    <div class="cardings" id="compButton7">
      <img src='img/cs4.png'>
      <div class="overlay-text">Android Development 2120</div>
    </div>
    <div class="cardings" id="compButton8">
      <img src='img/cs7.png'>
      <div class="overlay-text">Computer Networks 3690</div>
    </div>
    <div class="cardings" id="compButton9">
      <img src='img/cs8.png'>
      <div class="overlay-text">Cyber Security 4120</div>
    </div>
    
    </div>
    
    
     <div class="Card">
      <div class="CardInner">
        <div class="container">
          <div class="Icon">
            <svg id='searchClassesButton' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#657789" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search" onclick="searchClasses()"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </div>
          <div class="InputContainer">
            <input id='classesInput' placeholder="COMP 34.." onkeydown="handleSearchClasses(event)"/>
          </div>
  </div>
     
 </div>
 </div>
 
 
  <div id="classes" style="display: none;">
  <a href="#" id="class1" style="display: none;">COMP 3020</a>
  <a href="#" id="class2" style="display: none;">COMP 3260</a>
  <a href="#" id="class3" style="display: none;">COMP 4610</a>
</div>

 </div>
 
 
 
 
 

 
 
 
	
 

  
	

  
 <form id='rateP' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompPage'>
    <input type='hidden' name='command' value='RateMyProf'>
    </form>
    
    <form id='about' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompPage'>
    <input type='hidden' name='command' value='About'>
    </form>
    
    <form id='courses' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompPage'>
    <input type='hidden' name='command' value='Courses'>
    </form>
    
    <form id='forum' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompPage'>
    <input type='hidden' name='command' value='Forum'>
    </form>
    
    <form id='main' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompPage'>
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
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
<script>


 document.getElementById('logotip').addEventListener('click', function() {
        document.getElementById('main').submit();
    });
    
     document.getElementById('compButton').addEventListener('click', function() {
        document.getElementById('compClass').submit();
    });

	 document.getElementById('compButton1').addEventListener('click', function() {
        document.getElementById('compClass').submit();
    });
	
	 document.getElementById('compButton2').addEventListener('click', function() {
        document.getElementById('compClass').submit();
    });


	 document.getElementById('compButton3').addEventListener('click', function() {
        document.getElementById('compClass2').submit();
    });

	 document.getElementById('compButton4').addEventListener('click', function() {
        document.getElementById('compClass2').submit();
    });
	
	 document.getElementById('compButton5').addEventListener('click', function() {
        document.getElementById('compClass2').submit();
    });
    
     document.getElementById('compButton6').addEventListener('click', function() {
        document.getElementById('compClass3').submit();
    });

	 document.getElementById('compButton7').addEventListener('click', function() {
        document.getElementById('compClass3').submit();
    });
	
	 document.getElementById('compButton8').addEventListener('click', function() {
        document.getElementById('compClass3').submit();
    });
    
     document.getElementById('compButton9').addEventListener('click', function() {
        document.getElementById('compClass3').submit();
    });



	

	
	
	function searchClasses() {
  var searchValue = document.getElementById('classesInput').value.trim().toUpperCase();
  performClassSearch(searchValue);
}

function handleSearchClasses(event) {
  if (event.key === "Enter") {
    var searchValue = document.getElementById('classesInput').value.trim().toUpperCase();
    performClassSearch(searchValue);
    event.preventDefault();
  }
}

function performClassSearch(searchValue) {
  
  if (searchValue === "3020" || searchValue === "comp 3020" || searchValue === "comp3020") {
    document.getElementById('classes').style.display = 'block';
    document.getElementById('class1').style.display = 'block';
    document.getElementById('classes').style.bottom = '16.8%';
     document.getElementById('class2').style.display = 'none';
     document.getElementById('class3').style.display = 'none';
     
     
  }
  else if (searchValue === "3260" || searchValue === "comp 3260" || searchValue === "comp3260") {
    document.getElementById('classes').style.display = 'block';
    document.getElementById('class2').style.display = 'block';
     document.getElementById('classes').style.bottom = '16.8%';
    document.getElementById('class3').style.display = 'none';
     document.getElementById('class1').style.display = 'none';
  }
  
  else if (searchValue === "4610" || searchValue === "comp 4610" || searchValue == "comp4610") {
    document.getElementById('classes').style.display = 'block';
    document.getElementById('class3').style.display = 'block';
     document.getElementById('classes').style.bottom = '16.8%';
    document.getElementById('class1').style.display = 'none';
     document.getElementById('class2').style.display = 'none';
  }
  
  else {
  
    document.getElementById('classes').style.display = 'block';
    document.getElementById('class1').style.display = 'block';
     document.getElementById('class2').style.display = 'block';
    document.getElementById('class3').style.display = 'block';
    document.getElementById('classes').style.bottom = '7%';
  
  }
  
}
  
   var classesElement = document.getElementById('classes');
  classesElement.style.opacity = 1;
  classesElement.style.height = 'auto';




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

	document.getElementById('back-button').addEventListener('click', function() {
        document.getElementById('main').submit();
    });
    
    
    document.getElementById('class1').addEventListener('click', function() {
        document.getElementById('compClass').submit();
    });
    
    document.getElementById('class3').addEventListener('click', function() {
        document.getElementById('compClass2').submit();
    });
    
    document.getElementById('class2').addEventListener('click', function() {
        document.getElementById('compClass3').submit();
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
