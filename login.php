<!-- Created for COMP 3450 by Uail Zhukenov, Begimai Alisherova, Gurjit Kaur -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRU login</title>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  

  <style>
    body {
      margin: 0;
      padding: 0;
      background: #2385C4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .intro {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
      top: 0;
      left: 0;
      position: relative;
      z-index: 1;
    }

    .intro img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 15px; /* Optional: add border-radius to the image */
    }

    #modal-signin {
      position: absolute;
      top: 53%;
      left: 20%;
      transform: translate(-50%, -50%);
      /*background: #D2CFE2;*/
      padding: 25px;
      border-radius: 15px;
      text-align: center;
      width: 250px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }


    #modal-signin input {
      width: calc(100% - 20px);
      padding: 10px;
      margin-bottom: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    #submit-signin {
      background-color: #6DACDF;
      color: white;
      border: none;
      border-radius: 50px;
      cursor: pointer;
    }

    #submit-signin:hover {
      background-color: #45a049;
    }
    
    .logo {
     position: absolute; top: 5%; left: 3%; width: 100px; height: 100px;
    }
  </style>
</head>

<body>

  <div class='intro' data-aos="fade-in" data-aos-duration="2000" data-aos-once="true">
    <img src='img/startTRU4.svg' alt='TRU logo'>
    
    <div class='logo' data-aos="fade-in" data-aos-duration="2000" data-aos-once="true">
    <img src='img/logotip2.svg' data-aos="fade-in" data-aos-duration="2000" data-aos-once="true">
    </div>
    
    <div class='modal' id='modal-signin'>
      <form method='get' action='controllerTRU.php'>
        <input type='hidden' name='page' value='LoginPage'>
        <input type='hidden' name='command' value='SignIn'>
        
        <input id='signin-username' type='text' name='Username' placeholder='T00123456' required><br>
        <?php if (!empty($error_msg_username_signin)) echo $error_msg_username_signin; ?><br>
        
        <input id='signin-password' type='password' name='Password' placeholder='******' required><br>
        <?php if (!empty($error_msg_password_signin)) echo $error_msg_password_signin; ?><br>
        
        <input class='submit' id='submit-signin' type='submit' value='Sign In'>
      </form>
    </div>
  </div>
<script>
 AOS.init({
      duration: 3000,
      once: true,
    });
</script>

</body>



</html>
