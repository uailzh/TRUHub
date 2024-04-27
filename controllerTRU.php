<?php
//Created for COMP 3450 by Uail Zhukenov, Begimai Alisherova, Gurjit Kaur

if (empty($_GET['page'])) {
    include('login.php');
    exit();
}

require("modelTRU.php");


//startpage
if ($_GET['page'] == 'LoginPage') 
{
    $command = $_GET['command'];
    
    
    
    switch($command) {
    
        case 'SignIn':
            $username = $_GET['Username'];
            $password = $_GET['Password'];

            if (is_valid($username, $password))
            {
                session_start();
                $_SESSION['signedin'] = 'YES';
                $_SESSION['username'] = $username;
                include('mainTRU.php');
                exit;
               
            }
            else 
            {
                
                $error_msg_username_signin = '* Non-existing username or';
                $error_msg_password_signin = '* wrong password';
                include('login.php');
            }
            break;
            
        
        default:
            break;
    }
    exit();
}


else if ($_GET['page'] == 'MainPage') 
{
    $command = $_GET['command'];

    session_start();  
	$_SESSION['signedin'] = 'YES';
	 
	 
    if (empty($_SESSION['signedin'])) {  // If not signedin,
    include('login.php');
    exit;
}

          
   
    switch($command) {
    
    case 'RateMyProf':
    
    include('rate.php');
    break;
    
    case 'About':
    
    include('about.php');
    break;
    
    
    case 'Courses':
    
    include('courses.php');
    break;
    
    case 'Forum':
    
    include('forum.php');
    break;
    
    case 'Main':
    
    include('mainTRU.php');
    break;
    
    
     
     default:
     include('mainTRU.php');
     break;
    
    }
    

exit();
}


else if ($_GET['page'] == 'RatePage') 
{
    $command = $_GET['command'];

    session_start();  
	$_SESSION['signedin'] = 'YES';
	 
	 
    if (empty($_SESSION['signedin'])) {  // If not signedin,
    include('login.php');
    exit;
}

          
   
    switch($command) {
    
    case 'RateMyProf':
    
    include('rate.php');
    break;
    
    case 'About':
    
    include('about.php');
    break;
    
    
    case 'Courses':
    
    include('courses.php');
    break;
    
    case 'Forum':
    
    include('forum.php');
    break;
    
    case 'Main':
    
    include('mainTRU.php');
    break;
    
    
    case 'Prof':
    
    include('prof.php');
    break;
    
     case 'Prof2':
    
    include('prof2.php');
    break;
    
     case 'Prof3':
    
    include('prof3.php');
    break;
    
    
     
     default:
     include('rate.php');
     break;
    
    }
    

exit();
}

else if ($_GET['page'] == 'AboutPage') 
{
    $command = $_GET['command'];

    session_start();  
	$_SESSION['signedin'] = 'YES';
	 
	 
    if (empty($_SESSION['signedin'])) {  // If not signedin,
    include('login.php');
    exit;
}

          
   
    switch($command) {
    
    case 'RateMyProf':
    
    include('rate.php');
    break;
    
    case 'About':
    
    include('about.php');
    break;
    
    
    case 'Courses':
    
    include('courses.php');
    break;
    
    case 'Forum':
    
    include('forum.php');
    break;
    
     case 'Main':
    
    include('mainTRU.php');
    break;
    
    
     
     default:
     include('about.php');
     break;
    
    }
    

exit();
}


else if ($_GET['page'] == 'CoursesPage') 
{
    $command = $_GET['command'];

    session_start();  
	$_SESSION['signedin'] = 'YES';
	 
	 
    if (empty($_SESSION['signedin'])) {  // If not signedin,
    include('login.php');
    exit;
}

          
   
    switch($command) {
    
    case 'RateMyProf':
    
    include('rate.php');
    break;
    
    case 'About':
    
    include('about.php');
    break;
    
    
    case 'Courses':
    
    include('courses.php');
    break;
    
    case 'Forum':
    
    include('forum.php');
    break;
    
     case 'Main':
    
    include('mainTRU.php');
    break;
    
    case 'Comp':
    
    include('compClass.php');
    break;
    
    case 'Comp2':
    
    include('compClass2.php');
    break;
    
    case 'Comp3':
    
    include('compClass3.php');
    break;
    
    
     case 'CompDep':
    
    include('comp.php');
    break;
    
    
     
     default:
     include('courses.php');
     break;
    
    }
    

exit();
}


else if ($_GET['page'] == 'ForumPage') 
{
    $command = $_GET['command'];

    session_start();  
	$_SESSION['signedin'] = 'YES';
	 
	 
    if (empty($_SESSION['signedin'])) {  // If not signedin,
    include('login.php');
    exit;
}

          
   
    switch($command) {
    
    case 'RateMyProf':
    
    include('rate.php');
    break;
    
    case 'About':
    
    include('about.php');
    break;
    
    
    case 'Courses':
    
    include('courses.php');
    break;
    
    case 'Forum':
    
    include('forum.php');
    break;
    
     case 'Main':
    
    include('mainTRU.php');
    break;
    
    
     
     default:
     include('forum.php');
     break;
    
    }
    

exit();
}


else if ($_GET['page'] == 'CompPage') 
{
    $command = $_GET['command'];

    session_start();  
	$_SESSION['signedin'] = 'YES';
	 
	 
    if (empty($_SESSION['signedin'])) {  // If not signedin,
    include('login.php');
    exit;
}

          
   
    switch($command) {
    
    case 'RateMyProf':
    
    include('rate.php');
    break;
    
    case 'About':
    
    include('about.php');
    break;
    
    
    case 'Courses':
    
    include('courses.php');
    break;
    
    case 'Forum':
    
    include('forum.php');
    break;
    
    case 'Main':
    
    include('mainTRU.php');
    break;
    
    case 'CompClass':
    
    include('compClass.php');
    break;
    
    case 'CompClass2':
    
    include('compClass2.php');
    break;
    
    case 'CompClass3':
    
    include('compClass3.php');
    break;
    
    case 'Prof':
    
    include('prof.php');
    break;
    
    
     
     default:
     include('comp.php');
     break;
    
    }
    

exit();
}    


else if ($_GET['page'] == 'CompClass') 
{
    $command = $_GET['command'];

    session_start();  
	$_SESSION['signedin'] = 'YES';
	 
	 
    if (empty($_SESSION['signedin'])) {  // If not signedin,
    include('login.php');
    exit;
}

          
   
    switch($command) {
    
    case 'RateMyProf':
    
    include('rate.php');
    break;
    
    case 'About':
    
    include('about.php');
    break;
    
    
    case 'Courses':
    
    include('courses.php');
    break;
    
    case 'Forum':
    
    include('forum.php');
    break;
    
    case 'Main':
    
    include('mainTRU.php');
    break;
    
    case 'Comp':
    
    include('comp.php');
    break;
    
    case 'Prof':
    
    include('prof.php');
    break;
    
    case 'Prof2':
    
    include('prof2.php');
    break;
    
    case 'Prof3':
    
    include('prof3.php');
    break;
    
    
    
     
     default:
     include('compClass.php');
     break;
    
    }
    

exit();
}    



else if ($_GET['page'] == 'CompClass2') 
{
    $command = $_GET['command'];

    session_start();  
	$_SESSION['signedin'] = 'YES';
	 
	 
    if (empty($_SESSION['signedin'])) {  // If not signedin,
    include('login.php');
    exit;
}

          
   
    switch($command) {
    
    case 'RateMyProf':
    
    include('rate.php');
    break;
    
    case 'About':
    
    include('about.php');
    break;
    
    
    case 'Courses':
    
    include('courses.php');
    break;
    
    case 'Forum':
    
    include('forum.php');
    break;
    
    case 'Main':
    
    include('mainTRU.php');
    break;
    
    case 'Prof':
    
    include('prof.php');
    break;
    
     case 'Comp':
    
    include('comp.php');
    break;
    
    
    
    
    
     
     default:
     include('compClass2.php');
     break;
    
    }
    

exit();
}   



else if ($_GET['page'] == 'CompClass3') 
{
    $command = $_GET['command'];

    session_start();  
	$_SESSION['signedin'] = 'YES';
	 
	 
    if (empty($_SESSION['signedin'])) {  // If not signedin,
    include('login.php');
    exit;
}

          
   
    switch($command) {
    
    case 'RateMyProf':
    
    include('rate.php');
    break;
    
    case 'About':
    
    include('about.php');
    break;
    
    
    case 'Courses':
    
    include('courses.php');
    break;
    
    case 'Forum':
    
    include('forum.php');
    break;
    
    case 'Main':
    
    include('mainTRU.php');
    break;
    
    case 'Prof':
    
    include('prof.php');
    break;
    
    case 'Comp':
    
    include('comp.php');
    break;
    
    
    
    
    
     
     default:
     include('compClass3.php');
     break;
    
    }
    

exit();
}     


else {
    echo 'Unknown page error!';
    exit();
}

?>