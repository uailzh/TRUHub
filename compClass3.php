<!-- Created for COMP 3450 by Uail Zhukenov, Begimai Alisherova, Gurjit Kaur -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COMP</title>
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
      background-image: url('img/data.svg');
      
      background-size: cover;
      background-position: center;
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }
    
    .last {
      background-image: url('img/38.svg');
      
      background-size: cover;
      background-position: center;
      width: 100%;
      height: 110vh;
      display: flex;
      justify-content: center;
      
      position: relative;
    }

  


#back-button {
  position: fixed;
  bottom: 2%;
  left: 87%;
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





 .offer {
  background-image: url('img/data2.svg');
  background-size: cover;
  background-position: center; /* Adjust as needed */
  background-repeat: no-repeat;
  height: 100vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
  overflow-y: auto; /* Allow vertical scrolling if content overflows */
}


 
.container2 {
  display: flex;
  flex-wrap: wrap; /* Allow wrapping of items to the next row */
  justify-content: left; /* Align items horizontally in center */
  margin-left: 10%;
  margin-top: 13%;
}

.container3 {
  display: flex;
  flex-direction: row; /* Allow wrapping of items to the next row */
  justify-content: left; /* Align items horizontally in center */
  margin-top: 40%;
}

.cardings {
  width: calc(15% - 20px); /* 20% minus the gap */
  height: calc(28% - 20px);
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





.cardings2 {
  width: 200px; /* 20% minus the gap */
  height: 200px;
  margin: 10px; /* Adjust margin for spacing */
  border-radius: 10px; /* Rounded corners */
  overflow: hidden; /* Hide any overflowing content */
  position: relative;
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Add transition effects */
}

.cardings2:hover {
  transform: translateY(-5px); /* Lift the carding on hover */
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Add a shadow on hover */
}

.cardings2 img {
  width: 100%; /* Make the image fill the carding */
  height: 100%; /* Make the image fill the carding */
  object-fit: cover; /* Cover the entire area of the carding */
  transition: opacity 0.3s ease; /* Add transition effect for opacity */
}

.cardings2:hover img {
  opacity: 0.8; /* Reduce opacity on hover */
}



.container3 {
  display: flex;
  margin-top: 5%; /* Adjust the margin-top value to create a gap between container2 and container3 */
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
  margin-top: 100px;
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
  </div>
  
  <div class="offer" id="offer" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
</div>



<div class="last" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">


 <div class="container2">
  	 <div class="cardings" id="compButton">
      <img src='img/r1.png'>
      <div class="overlay-text">Notes</div>
    </div>
    <div class="cardings" id="compButton1">
      <img src='img/r2.png'>
      <div class="overlay-text">Books & Resources</div>
    </div>
    <div class="cardings" id="compButton2">
      <img src='img/r3.png'>
      <div class="overlay-text">Video Tutorials</div>
    </div>
    <div class="cardings" id="compButton2">
      <img src='img/r4.png'>
      <div class="overlay-text">Required Software</div>
    </div>
    <div class="cardings" id="compButton2">
      <img src='img/r5.png'>
      <div class="overlay-text">Additional Resources</div>
    </div>
    
    
    <div class="container3">
  	 <div class="cardings2" id="profButton">
      <img src='img/prof1.png'>
      <div class="overlay-text">David Benkins</div>
    </div>
    <div class="cardings2" id="profButton1">
      <img src='img/prof2.png'>
      <div class="overlay-text">Kate Stevenson</div>
    </div>
    <div class="cardings2" id="profButton2">
      <img src='img/prof3.png'>
      <div class="overlay-text">John Doe</div>
    </div>
    
    
    </div>
    
    </div>
    
    
    
    
    
    

</div>
    
   
 
 
  
 
 
 

 
 
 
	
 

  
	

  
 <form id='rateP' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompClass3'>
    <input type='hidden' name='command' value='RateMyProf'>
    </form>
    
    <form id='about' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompClass3'>
    <input type='hidden' name='command' value='About'>
    </form>
    
    <form id='courses' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompClass3'>
    <input type='hidden' name='command' value='Courses'>
    </form>
    
    <form id='forum' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompClass3'>
    <input type='hidden' name='command' value='Forum'>
    </form>
    
    <form id='main' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompClass3'>
    <input type='hidden' name='command' value='Main'>
    </form>
    
    
    <form id='compClass' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompClass3'>
    <input type='hidden' name='command' value='CompClass'>
    </form>
    
    <form id='comp' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompClass3'>
    <input type='hidden' name='command' value='Comp'>
    </form>
    
     <form id='prof' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompClass3'>
    <input type='hidden' name='command' value='Prof'>
    </form>
    
    <form id='prof2' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompClass'>
    <input type='hidden' name='command' value='Prof2'>
    </form>
    
     <form id='prof3' action='controllerTRU.php' method='get' style='display: none;'>
    <input type='hidden' name='page' value='CompClass'>
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
        document.getElementById('comp').submit();
    });
    
    document.getElementById('profButton').addEventListener('click', function() {
        document.getElementById('prof').submit();
    });
    
     document.getElementById('profButton1').addEventListener('click', function() {
        document.getElementById('prof2').submit();
    });
    
     document.getElementById('profButton2').addEventListener('click', function() {
        document.getElementById('prof3').submit();
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
