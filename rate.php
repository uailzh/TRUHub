<!-- Created for COMP 3450 by Uail Zhukenov, Begimai Alisherova, Gurjit Kaur -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RateMyProf</title>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.1.2/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400&family=Finger+Paint&display=swap">
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  

  <style>
  
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Orbitron&display=swap');
	@import url('https://fonts.googleapis.com/css?family=Hind&display=swap');
	
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
      z-index: 33100;
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
      background-image: url('img/rate.svg');
      
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
  background-color: #D5564A;
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

#rate-button:hover {
  background-color: #D24F8D;
}


 .offer {
  background-image: url('img/rate2.svg');
  background-size: cover;
  background-position: center;
  width: 100%;
  height: 100vh; /* Set a minimum height to cover the viewport */
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  overflow-y: auto; /* Allow vertical scrolling if content overflows */
  padding-bottom: 300px; /* Add padding to the bottom to prevent overlap with the fixed footer */
}

    
    
    
    * {
  -webkit-font-smoothing: antialiased;
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
  bottom: 23%;
  left: 45%;
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



#profs {
  display: none; /* Initially hide the section */
  background-color: #e2e9f4; /* Match the background color of the search block */
  padding: 20px; /* Add padding for spacing */
  border-radius: 10px; /* Apply border radius for rounded corners */
  margin-top: 4px; /* Add margin to separate from the search block */
}

#profs a {
  display: block; /* Make the links block-level for spacing */
  color: #657789; /* Set text color */
  padding: 10px; /* Add padding for spacing */
  border-radius: 5px; /* Apply border radius for rounded corners */
  margin-bottom: 10px; /* Add margin between each link */
  text-decoration: none; /* Remove underline */
  transition: background-color 0.3s ease; /* Smooth transition on hover */
  
}

#profs a:hover {
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

  
  
  
  
  
body .card {
  height: 43vw;
  width: 33vw;
  background-color: #F3E7F5;
  margin-left: 30vw;
  margin-top: 3vw;
  display: none;
  border-radius: 50px;
}
body .card #header {
  height: 5vw;
  background: #D24F8D;
  padding: 0vw;
  border-radius: 20px;
  text-align: center;
}
body .card #header h1 {
  color: #fff;
  font-size: 2vw;
  
  padding: 1vw;
}
body .card #message-section::-webkit-scrollbar {
  width: 10px;
}
body .card #message-section {
  height: 32vw;
  padding: 0 2.5vw;
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: var(--thumbBG) var(--scrollbarBG);
}
body .card #message-section::-webkit-scrollbar-track {
  background: var(--scrollbarBG);
}
body .card #message-section::-webkit-scrollbar-thumb {
  background-color: var(--thumbBG);
  border-radius: 6px;
  border: 3px solid var(--scrollbarBG);
}
body .card #message-section #bot,
body .card #message-section #user {
  position: relative;
  bottom: 0;
  min-height: 1.5vw;
  border: 0.15vw solid #777;
  background-color: #fff;
  border-radius: 0px 1.5vw 1.5vw 1.8vw;
  padding: 1vw;
  margin: 1.5vw 0;
}
body .card #message-section #user {
  border: 1.5px solid #96729D;
  border-radius: 1.5vw 0vw 1.5vw 1.8vw;
  background: #96729D;
  float: right;
}
body .card #message-section #user #user-response {
  color: #fff;
}
body .card #message-section .message {
  color: #000;
  clear: both;
  line-height: 1.2vw;
  font-size: 1.2vw;
  padding: 8px;
  position: relative;
  margin: 8px 0;
  max-width: 85%;
  word-wrap: break-word;
  z-index: 2;
}
body .card #input-section {
  z-index: 1;
  padding: 0 2.5vw;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  overflow: hidden;
  height: 5vw;
  width: 100%;
  
}
body .card #input-section input {
  color: #000;
  min-width: 0.5vw;
  outline: none;
  height: 4vw;
  width: 26vw;
  border-top: none;
  border-left: none;
  border-right: none;
  border-bottom: solid #000 0.1vw;
  background: #FFF4FB;
}
body .card .send {
  background: transparent;
  border: 0;
  cursor: pointer;
  flex: 0 0 auto;
  margin-left: 1.4vw;
  margin-right: 0vw;
  padding: 0;
  position: relative;
  outline: none;
}
body .card .send .circle {
  position: relative;
  width: 4.8vw;
  height: 4.8vw;
  display: flex;
  align-items: center;
  justify-content: center;
  

}

body .card .send .circle i {
  font-size: 3vw;
  margin-left: -1vw;
  margin-top: 1vw;
  color: #D24F8D;
 } 


#chat-button {
  position: fixed;
  bottom: 10px;
  left: 20px;
  background: url("img/chatbot.png") center/cover no-repeat; /* Set the background image */
  color: white;
  padding: 45px 50px;
  text-decoration: none;
  transition: background-color 0.3s ease;
  z-index: 9999;
  border: none;
}

#chat-button:hover {
  cursor: pointer;
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
   <button id="rate-button" onclick="scrollToNextSection()">Rate Profs</button>
  </div>
  
  <div class="offer" id="offer" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
  
  <div class="Card" style="margin-left: 10%;">
  <div class="CardInner">
  <div class="container">
    <div class="Icon">
      <svg id='searchProfs' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#657789" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search" onclick="searchProfessors()"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
    </div>
    <div class="InputContainer">
      <input id="profSearchInput" placeholder="Search Professor" onkeydown="handleSearch(event)"/>
    </div>
  </div>
 </div>
 
  <div id="profs" style="display: none;">
  <a href="#" id="prof1" style="display: none;">John Doe</a>
  <a href="#" id="prof2" style="display: none;">Kate Stevenson</a>
  <a href="#" id="prof3" style="display: none;">David Benkins</a>
</div>

 
</div>



</div>
  


 <div class="card">
    <div id="header">
      <h1>TRU Helper!</h1>
    </div>
    <div id="message-section">
      <div class="message" id="bot"><span id="bot-response">Hi fellow student! How can I help you?</span></div>
    </div>
    <div id="input-section">
      <input id="input" type="text" placeholder="Type a message" autocomplete="off" autofocus="autofocus"/>
      <button class="send" onclick="sendMessage()">
        <div class="circle"><i class="zmdi zmdi-mail-send"></i></div>
      </button>
    </div>
  </div>
  



<button id="chat-button">
   
</button>


  
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
    
     <form id='rateProfessor' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='RatePage'>
    <input type='hidden' name='command' value='Prof'>
    </form>
    
     <form id='rateProfessor2' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='RatePage'>
    <input type='hidden' name='command' value='Prof2'>
    </form>
    
     <form id='rateProfessor3' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='RatePage'>
    <input type='hidden' name='command' value='Prof3'>
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
    

	function searchProfessors() {
  var searchValue = document.getElementById('profSearchInput').value.trim().toLowerCase();
  performSearch(searchValue);
}

function handleSearch(event) {
  if (event.key === "Enter") {
    var searchValue = document.getElementById('profSearchInput').value.trim().toLowerCase();
    performSearch(searchValue);
    event.preventDefault();
  }
}

function performSearch(searchValue) {
  if (searchValue === "john" || searchValue == "j" || searchValue === "doe" || searchValue === "john doe" || searchValue === "d" || searchValue === "johndoe" || searchValue === "do" || searchValue === "jo" || searchValue === "joh") {
    document.getElementById('profs').style.display = 'block';
    document.getElementById('prof1').style.display = 'block';
    document.getElementById('prof2').style.display = 'none';
    document.getElementById('prof3').style.display = 'none';
  } else if (searchValue === "kate" || searchValue === "stevenson" || searchValue === "katestevenson" || searchValue === "kate stevenson" || searchValue === "k" || searchValue === "ka" || searchValue === "kat" || searchValue === "st" || searchValue === "stev" || searchValue === "steven" || searchValue === "stevens") {
    document.getElementById('profs').style.display = 'block';
    document.getElementById('prof2').style.display = 'block';
    document.getElementById('prof3').style.display = 'none';
    document.getElementById('prof1').style.display = 'none';
  } else if (searchValue === "david" || searchValue === "benkins" || searchValue === "davidbenkins" || searchValue === "dav" || searchValue === "ben" || searchValue === "d" || searchValue === "davi" || searchValue === "benk" || searchValue === "b") {
    document.getElementById('profs').style.display = 'block';
    document.getElementById('prof3').style.display = 'block';
    document.getElementById('prof1').style.display = 'none';
    document.getElementById('prof2').style.display = 'none';
  } else {
    document.getElementById('profs').style.display = 'block';
    document.getElementById('prof1').style.display = 'block';
    document.getElementById('prof2').style.display = 'block';
    document.getElementById('prof3').style.display = 'block';
  }
}



document.getElementById('prof1').addEventListener('click', function() {
        document.getElementById('rateProfessor3').submit();
    });
    
    document.getElementById('prof2').addEventListener('click', function() {
        document.getElementById('rateProfessor2').submit();
    });
    
    document.getElementById('prof3').addEventListener('click', function() {
        document.getElementById('rateProfessor').submit();
    });

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
    
    
    
      document.addEventListener("DOMContentLoaded", function() {
  const chatButton = document.getElementById('chat-button');
  const chatbot = document.querySelector('.card');

  let isOpen = false; // Variable to track if the chatbot is open or closed

  chatButton.addEventListener('click', function() {
    if (!isOpen) { // If the chatbot is closed, open it
      chatbot.style.display = 'block';
      chatbot.style.zIndex = '10000'; // Ensure the chatbot is on top
      chatbot.style.position = 'fixed';
      chatbot.style.top = '50%';
      chatbot.style.left = '50%';
      chatbot.style.transform = 'translate(-50%, -50%)';
      isOpen = true; // Update the state to indicate the chatbot is open
    } else { // If the chatbot is open, close it
      chatbot.style.display = 'none';
      isOpen = false; // Update the state to indicate the chatbot is closed
    }
  });

  // Event listener to close chatbot when clicking outside of it
  document.body.addEventListener('click', function(event) {
    if (!chatbot.contains(event.target) && event.target !== chatButton) {
      chatbot.style.display = 'none';
      isOpen = false; // Update the state to indicate the chatbot is closed
    }
  });
});




 
 
 
 const userMessage = [
  ["hi", "hey", "hello"],
  ["Help", "help", "help?", "help me", "please help", "please help me", "I need your help"],
  ["Where can I search classes", "Search classes", "search classes", "search classes please", "I need to search classes", "classes"],
  ["Where can I search profs", "profs", "professors", "search professors", "search profs", "rate profs", "rate my prof", "ratemyprof", "information on professors", "Where I can rate professors", "Where can I rate profs", "info on profs"],
  ["how to register", "how to register for classes", "register", "register classes"],
  ["how to connect with students", "help center", "discussion", "discussion forum", "talk to students", "connect with students"],
  ["tell me about yourself", "what this platform is for?", "What is TRU Hub", "tru hub", "TRU HUB", "truhub", "what is tru hub?"],
  ["how to find my faculty", "faculty", "department", "What is my faculty", "What is my department", "search department", "search faculty", "science", "comp science", "computing science", "data science", "comp", "biology", "chemistry", "math", "chem", "mathematics", "math", "geology", "business", "blaw", "arts", "psychology", "psyc", "culinary", "cooking", "culinary arts", "adventure", "digital art", "tourism", "bba", "business administration", "accounting"],
  ["tru", "Thompson Rivers", "Thompson Rivers University", "TRU", "Tell me about TRU", "tell me about tru", "tell me about TRU", "Can you tell me about tru"],
  ["who created you", "who made you", "who is your creator"],

  [
    "your name please",
    "your name",
    "may i know your name",
    "what is your name",
    "what call yourself"
  ],
  ["i love you"],
  ["How are you?", "How are you", "how are you", "hwu", "how are you?", "what is up?", "whats up", "how you doing"],
  ["you dont understand", "what is wrong with you", "why you dont understand", "you are wrong", "You are wrong", "You are not helping", "I dont understand"],
  ["materials", "notes", "share notes", "find notes", "find resources", "find materials", "class notes", "share materials", "references", "old notes", "where can I find materials?", "Where can I find materials?", "where can I find notes?", "where can I find resources?", "where can I find notes?"],
  ["ah", "ok", "okay", "nice", "welcome"],
  ["thanks", "thank you"],
  ["what should i eat today"],
  ["bro"],
  ["what", "why", "how", "where", "when"],
  ["corona", "covid19", "coronavirus"],
  ["you are funny"],
  ["i dont know"],
  ["boring"],
  ["im tired"]
];
const botReply = [
  ["Hello!", "Hi!", "Hey!", "Hi there!"],
  ["Sure, how can I help you?", "What do you need help with?", "Sure, ask me anything!", "Sure, how can I help you?", "Okay, what are you looking for?", "Sure, I am here to help you, any questions?", "Please, specify your question"],
  ["I got you, you can search classes by this link..."],
  ["No worries, you can search and rate professors by this link..."],
  ["You can register at myTRU, following this link..."],
  ["Sure, you can join our discussion forum! Click here!"],
  ["Tru Hub is a platform for students to connect! Click here to learn more!", "Tru Hub is a platform for students to connect! Click here to learn more!", "Tru Hub is a platofrm for students to connect! Click here to learn more!", "Tru Hub is a platofrm for students to connect! Click here to learn more!", "Tru Hub is a platofrm for students to connect! Click here to learn more!", "Tru Hub is a platofrm for students to connect! Click here to learn more!", "Tru Hub is a platofrm for students to connect! Click here to learn more!", "Tru Hub is a platofrm for students to connect! Click here to learn more!"],
  ["You can find faculties here, or by seeing faculty cards on home page"],
  ["Sure, you can learn more about TRU by clicking this link"],
  ["I have been created by three enthusiastic students!"],
  ["My name is TRU helper, I am here to navigate you", "I am TRU helper, nice to meet you"],
  ["I love you too", "Me too"],
  ["I am great, how can I help you?", "Doing good, you need some help?"],
  ["I am sorry, I may not posses that information, please refer to TRU page for more information"],
  ["You can find particular resources under each class section, you can search classes here."],
  ["Tell me a story", "Tell me a joke", "Tell me about yourself"],
  ["You're welcome"],
  ["Briyani", "Burger", "Sushi", "Pizza"],
  ["Dude!"],
  ["Yes?"],
  ["Please stay home"],
  ["Glad to hear it"],
  ["Say something interesting"],
  ["Sorry for that. Let's chat!"],
  ["Take some rest, Dude!"]
];

const alternative = [
  "I am sorry, I did not understand your question", "I am sorry, I do not posses that information..."
];

const synth = window.speechSynthesis;

function voiceControl(string) {
  let u = new SpeechSynthesisUtterance(string);
  u.text = string;
  u.lang = "en-aus";
  u.volume = 1;
  u.rate = 1;
  u.pitch = 1;
  synth.speak(u);
}

function sendMessage() {
  const inputField = document.getElementById("input");
  let input = inputField.value.trim();
  input != "" && output(input);
  inputField.value = "";
}
document.addEventListener("DOMContentLoaded", () => {
  const inputField = document.getElementById("input");
  inputField.addEventListener("keydown", function (e) {
    if (e.code === "Enter") {
      let input = inputField.value.trim();
      input != "" && output(input);
      inputField.value = "";
    }
  });
});

function output(input) {
  let product;

  // Preserve the original casing and whitespace in the input
  let text = input.trim();

  console.log("Input text:", text);

  let comparedText = compare(userMessage, botReply, text);

  product = comparedText
    ? comparedText
    : alternative[Math.floor(Math.random() * alternative.length)];
  addChat(input, product);
}

function compare(triggerArray, replyArray, string) {
  for (let x = 0; x < triggerArray.length; x++) {
    if (triggerArray[x].includes(string)) {
      let items = replyArray[x];
      let item = items[Math.floor(Math.random() * items.length)];
      return item;
    }
  }
  return null; // Return null if no exact match is found
}


function containMessageCheck(string) {
  let expectedReply = [
    [
      "Good Bye, dude",
      "Bye, See you!",
      "Dude, Bye. Take care of your health in this situation."
    ],
    ["Good Night, dude", "Have a sound sleep", "Sweet dreams"],
    ["Have a pleasant evening!", "Good evening too", "Evening!"],
    ["Good morning, Have a great day!", "Morning, dude!"],
    ["Good Afternoon", "Noon, dude!", "Afternoon, dude!"]
  ];
  let expectedMessage = [
    ["bye", "tc", "take care"],
    ["night", "good night"],
    ["evening", "good evening"],
    ["morning", "good morning"],
    ["noon"]
  ];
  let item;
  for (let x = 0; x < expectedMessage.length; x++) {
    if (expectedMessage[x].includes(string)) {
      items = expectedReply[x];
      item = items[Math.floor(Math.random() * items.length)];
    }
  }
  return item;
}
function addChat(input, product) {
  const mainDiv = document.getElementById("message-section");
  let userDiv = document.createElement("div");
  userDiv.id = "user";
  userDiv.classList.add("message");
  userDiv.innerHTML = `<span id="user-response">${input}</span>`;
  mainDiv.appendChild(userDiv);

  let botDiv = document.createElement("div");
  botDiv.id = "bot";
  botDiv.classList.add("message");
  
  // Replace specific words with anchor tags
  let replacedProduct = product.replace(/(search classes|professors|register|discussion forum|Tru Hub)/gi, '<a href="#">$1</a>');
  
  botDiv.innerHTML = `<span id="bot-response">${replacedProduct}</span>`;
  mainDiv.appendChild(botDiv);
  
  // Add event listener to handle clicks on anchor tags
  botDiv.querySelectorAll('a').forEach(anchor => {
    anchor.addEventListener('click', function(event) {
      // Prevent default action of the anchor tag
      event.preventDefault();
      
      // Get the text of the clicked anchor tag
      let clickedText = anchor.textContent.toLowerCase();
      
      // Redirect users based on the clicked word
      switch(clickedText) {
        case 'search classes':
          window.location.href = 'https://example.com/search-classes';
          break;
        case 'professors':
          window.location.href = 'https://example.com/search-professors';
          break;
        // Add more cases for other words if needed
      }
    });
  });

  var scroll = document.getElementById("message-section");
  scroll.scrollTop = scroll.scrollHeight;
  voiceControl(product);
}

    
    
</script>

</body>



</html>
