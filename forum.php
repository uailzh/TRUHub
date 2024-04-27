<!-- Created for COMP 3450 by Uail Zhukenov, Begimai Alisherova, Gurjit Kaur -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Discussion Forum</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.1.2/css/material-design-iconic-font.min.css">
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background: #2385C4;
      color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
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

    .content {
      text-align: center;
      margin-top: 15%;
    }
    
    .content p {
    margin-top: 5%;
    }

    .card {
  background: pink;
  width: 70%; /* Adjusted width */
  margin: 50px auto; /* Center horizontally */
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  margin-bottom: 15%;
}

    #message-section {
      height: 300px;
      overflow-y: auto;
      padding: 10px;
    }

    #message-section::-webkit-scrollbar {
      width: 8px;
    }

    #message-section::-webkit-scrollbar-thumb {
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 4px;
    }

    .message {
      background: #fff;
      color: #000;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      max-width: 80%;
      word-wrap: break-word;
      align-self: flex-start;
    }

    #input-section {
      display: flex;
      align-items: center;
      padding: 10px;
      background: #fff;
    }

    #input {
      flex: 1;
      padding: 8px;
      margin-right: 10px;
      border: none;
      border-radius: 5px;
      outline: none;
    }

    .send {
      background: transparent;
      border: none;
      cursor: pointer;
      outline: none;
    }

    .circle {
      width: 40px;
      height: 40px;
      background: #D24F8D;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .circle i {
      font-size: 24px;
      color: #fff;
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
  <header class='header'>
    <a href='#' class="logo" id="logotip"><img src='img/logotip2.svg'></a>
    <nav class='navbar'>
      <a href='#' id='mainLink'>Home</a>
      <a href='#' id='rateProf'>Rate My Prof</a>
      <a href='#' id='coursesLink'>Courses</a>
      <a href='#' class='current' id='forumLink'>Forum</a>
      <a href='#' id='aboutLink'>About</a>
    </nav>
  </header>

  <div class="content" data-aos="fade-in" data-aos-duration="2000" data-aos-once="true">
    <h1>Welcome to the Discussion Forum!</h1>
    <p>Feel free to ask any questions related to your classes.</p>
  </div>

  <div class="card" data-aos="fade-right" data-aos-duration="3500" data-aos-once="true">
    <div id="message-section"></div>
    <div id="input-section">
      <input id="input" type="text" placeholder="Type a message" autocomplete="off" autofocus="autofocus" onkeypress="sendMessage(event)">

      <button class="send" onclick="send()"> <!-- Move onclick attribute to button -->
  <div class="circle"> <i class="zmdi zmdi-mail-send"></i></div>
</button>

    </div>
  </div>
  
  
  <div id="reviewMessage">
  <div class="modal-review">
    <span class="closerev" onclick="closeReviewMessage()">&times;</span>
    <h2>Thank You for Your Question!</h2>
    <p>Your question has been posted.</p>
    <p>Someone from your Department will reply to you!</p>
  </div>
</div>

 <form id='rateP' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='MainPage'>
    <input type='hidden' name='command' value='RateMyProf'>
    </form>
    
    <form id='about' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='MainPage'>
    <input type='hidden' name='command' value='About'>
    </form>
    
    <form id='courses' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='MainPage'>
    <input type='hidden' name='command' value='Courses'>
    </form>
    
    <form id='forum' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='MainPage'>
    <input type='hidden' name='command' value='Forum'>
    </form>
    
    <form id='main' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='MainPage'>
    <input type='hidden' name='command' value='Main'>
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
  
  AOS.init({
      duration: 3000,
      once: true,
    });
    
  
    function sendMessage(event) {
  event = event || window.event; // Handle IE compatibility
  
  // Check if the key pressed is Enter (key code 13) or if the event target is the send button icon
  if (event.keyCode === 13 || event.which === 13) {
    const inputField = document.getElementById("input");
    let input = inputField.value.trim();
    if (input !== "") {
      addMessage(input);
      inputField.value = "";
      // Show the review message
       document.getElementById("reviewMessage").style.display = 'block';
    }
  }
}


 function send() {
  const inputField = document.getElementById("input");
  let input = inputField.value.trim();
  if (input !== "") {
    addMessage(input);
    inputField.value = "";
    // Show the review message
    document.getElementById("reviewMessage").style.display = 'block';
  }
}


    function addMessage(message) {
      const messageSection = document.getElementById("message-section");
      const messageDiv = document.createElement("div");
      messageDiv.className = "message";
      messageDiv.textContent = message;
      messageSection.appendChild(messageDiv);
      messageSection.scrollTop = messageSection.scrollHeight;
    }
    
     window.addEventListener('scroll', function () {
      var header = document.querySelector('header');
      header.classList.toggle('scrolled', window.scrollY > 0);
    });
    
    
    function closeReviewMessage() {
  document.getElementById("reviewMessage").style.display = 'none';
}
    
   window.addEventListener('click', function(event) {
  var reviewMessage = document.getElementById("reviewMessage");
      if (!reviewMessage.contains(event.target) && event.target !== reviewMessage) {
      reviewMessage.style.display = 'none';
  }
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
    
    
    
	
  </script>
</body>

</html>